<?php

namespace App\Http\ApiControllers;

use App\Models\WechatUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\ApiControllers\ApiController;
use App\Models\CharacterSalary;
use App\Models\CharacterType;
use App\Models\QuestionOption;
use App\Models\Resume;
use App\Models\User;
use App\Models\UserQuestion;
use App\Transformers\UserTransformer;
use App\Http\Requests\Api\WxUserCreateRequest;

class WechatUserController extends Controller
{

	public function create(WxUserCreateRequest $request)
	{
		$wechat_user = WechatUser::where('open_id', $request->input('open_id'))->first();

		if (! $wechat_user) {
			$result = WechatUser::create([
				'open_id' => $request->get('open_id'),
				'nickname' => $request->get('nickName'),
				'gender' => $request->get('gender'),
				'city' => $request->get('city'),
				'province' => $request->get('province'),
				'country' => $request->get('country'),
				'avatar_url' => $request->get('avatarUrl'),
			]);
		}

		return response()->json([
			'result' => true,
			'msg' => 'success',
		], 200);

	}

	/**
	 * @param Request $request
	 */
	public function update(Request $request)
	{
		$string = strval($request->getContent());
		$result = json_decode($string, true);
		$openId = $result['open_id'];

		$key = $result['key'];
		$data = $result['data'];
		$user = WechatUser::where('open_id', $openId)->first();
		$resume = $user->resume;
		$resume->{$key} = $data;
		$result = $resume->save();
		if ($result) {
			return response()->json([
				'message' => 'success',
				'status_code' => 200,
			], 200);
		} else {
			return response()->json([
				'message' => 'failed',
				'status_code' => 500
			], 500);
		}
	}

	/**
	 * @param Request $request
	 * @return mixed
	 */
	public function result(Request $request)
	{
		$string = strval($request->getContent());
		$result = json_decode($string, true);
		$openId = $result['open_id'];
		$user = WechatUser::where('open_id', $openId)->first();
		$data = $result['data'];
		$this->syncData($user, $data);
		return response()->json([
			'result' => true,
			'message' => 'success',
			'status_code' => 200,
		], 200);
	}

	/**
	 * @param Request $request
	 */
	public function information($openId)
	{
		$wxUser = WechatUser::where('open_id', $openId)->first();;
		if (! $wxUser) {
			return response()->json([
				'message' => 'not exist',
				'status_code' => 404,
			], 404);
		}

		// 获取问答数据
		$data = UserQuestion::where('open_id', $openId)->get()->toArray();

		if ($data) {
			// 统计问答数据
			$statistics = $this->getStatistics($data);

			// 根据问答计算基础薪资
			$baseSalary = $this->getBaseSalary($statistics);

			// 获取描述
			$description = $this->getDescription($statistics);
		} else {
			$baseSalary = 0;
			$description = "你是什么类型的人才呢？";
		}

		$salary = $baseSalary;

		$resume = $wxUser->resume;
		if (!$resume) {
			$resume = $wxUser->resume()->create();
		}
		// 根据简历增加薪资
		$extraSalaryMap = $this->getExtraSalary($wxUser, $resume);

		foreach ($extraSalaryMap as $item) {
			$salary += $item;
		}

		$resume = Resume::updateOrCreate([
			'open_id' => $openId
		], [
			'name'     => $wxUser->nickname,
			'gender'   => $wxUser->gender,
			'city'     => $wxUser->city,
			'province' => $wxUser->province,
			'country'  => $wxUser->country,
			'character_type_id' => isset($maxCharacteTypeId) ? $maxCharacteTypeId : 0,
		]);

		$resume = $this->updateResume($resume, $salary);

		// 返回描述数据
		return response()->json(array_merge($resume->toArray(), [
			'description' => $description,
			'base_salary' => intval($baseSalary),
			'extra_salary' => $extraSalaryMap
		]));
	}

	/**
	 * @param $array
	 * @return array
	 */
	protected function max($array, $limit)
	{
		arsort($array);
		$array = array_slice($array, 0, $limit, true);
		return $array;
	}

	/**
	 * Sync Question and Options to user_question table
	 *
	 * @param $data
	 */
	protected function syncData($user, $data)
	{

		UserQuestion::where('open_id', $user->open_id)->delete();

		foreach ($data as $key => $item) {
			$data[$key]['open_id'] = $user->open_id;
		}

		return UserQuestion::insert($data);
	}

	/**
	 * @param $user
	 * @param $salary
	 */
	protected function updateResume($resume, $salary)
	{
		$resume->value = intval($salary);
		$resume->save();
		return $resume;
	}

	/**
	 * @param $statistics
	 * @return string
	 */
	public function getDescription($statistics)
	{
		// 拼接两种类型的人格
		$maxTwo = $this->max($statistics, 2);
		$description = '';
		$character_id = array_keys($maxTwo)[0] + 1;
		$character = CharacterType::find($character_id);
		$description .= (str_replace('型', '', $character->display_name));
		$description .= '的';
		$character_id = array_keys($maxTwo)[1] + 1;
		$character = CharacterType::find($character_id);
		$description .= $character->display_name;
		$description .= '人才';
		return $description;
	}

	/**
	 * @param $data
	 * @return array
	 */
	protected function getStatistics($data)
	{
		// 初始化长度为9的0数组统计结果
		$result = [];
		for ($i = 0; $i < 9; $i ++)
			$result[$i] = 0;

		// 遍历回答
		foreach ($data as $item) {
			$option = QuestionOption::where('id', $item['question_option_id'])->first();
			$result[intval($option->character_type_id) - 1] += 1;
		}
		return $result;
	}

	/**
	 * @param $statistics
	 * @return float|int
	 */
	protected function getBaseSalary($statistics)
	{
		// 排名前三人格
		$maxThree = $this->max($statistics, 3);

		$salary = 0;

		// 前三人格薪资取平均
		foreach ($maxThree as $character_id => $score) {
			$salaryMap = CharacterSalary::where('character_id', $character_id + 1)->first();
			$salary += (($salaryMap->min_salary + $salaryMap->max_salary) / 2);
		}
		$salary /= 3;

		return $salary;

	}

	/**
	 * @param $user
	 */
	protected function getExtraSalary($wxUser, $resume)
	{
		$salaryMap = [];

		$education = $resume->education;
		// 获取教育背景
		$educationSalary = 0;
		$educationSalaryExtra = false;
		if ($education) {
			foreach ($education as $item) {
				switch ($item['type']) {
					case '本科院校':
						$educationSalary += 1000;
						break;
					case '硕士院校':
						$educationSalary += 500;
						break;
					case '博士院校':
						$educationSalary += 5000;
						break;
				}
				if (! $educationSalaryExtra && in_array($item['content'], ['清华大学', '北京大学', '中国人民大学', '复旦大学', '上海交通大学'])) {
					$educationSalary += 1000;
					$educationSalaryExtra = true;
				}
			}
		}


		$salaryMap['education'] = $educationSalary;

		// 社工经历
		$practiceSalary = 0;
		$practice = $resume->practice;
		if ($practice) {
			foreach ($practice as $kind => $item) {
				$practiceSalary += 100;
			}
		}
		if ($practiceSalary >= 300) {
			$practiceSalary = 300;
		}
		$salaryMap['practice'] = $practiceSalary;

		// 荣誉奖励
		$honorSalary = 0;
		$honor = $resume->honor;
		if ($honor) {
			foreach ($honor as $item) {
				switch ($item['type']) {
					case '校级奖励':
						$honorSalary += 100;
						break;
					case '省级奖励':
						$honorSalary += 200;
						break;
					case '国级奖励':
						$honorSalary += 500;
						break;
				}
			}
		}

		if ($honorSalary >= 800) {
			$honorSalary = 800;
		}
		$salaryMap['honor'] = $honorSalary;

		// 工作经历
		$workSalary = 0;
		$work = $resume->work;
		if ($work) {
			foreach ($work as $kind => $item) {
				$workSalary += 200;
			}
		}

		if ($workSalary >= 1000) {
			$workSalary = 1000;
		}
		$salaryMap['work'] = $workSalary;

		// 证书特长
		$specialitySalary = 0;
		$speciality = $resume->speciality;
		if ($speciality) {
			foreach ($speciality as $kind => $item) {
				$specialitySalary += 100;
			}
		}

		if ($specialitySalary >= 500) {
			$specialitySalary = 500;
		}
		$salaryMap['speciality'] = $specialitySalary;

		// 会员信息
		$salaryMember = 0;
		if ($wxUser->username) {
			$salaryMember += 200;
		}

		if ($wxUser->mobile) {
			$salaryMember += 300;
		}
		$salaryMap['member'] = $salaryMember;

		return $salaryMap;

	}
}
