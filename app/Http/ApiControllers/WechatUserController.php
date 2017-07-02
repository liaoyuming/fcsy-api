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

        if (!$wechat_user) {
            $result = WechatUser::create([
                'open_id'   => $request->get('openId'),
                'nickname'  => $request->get('nickName'),
                'gender'    => $request->get('gender'),
                'city'      => $request->get('city'),
                'province'  => $request->get('province'),
                'country'   => $request->get('country'),
                'avatar_url' => $request->get('avatarUrl'),
            ]);
        }

        return response()->json([
            'result' => true,
            'msg'    => 'success',
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
	public function answer(Request $request)
	{
		$string = strval($request->getContent());
		$result = json_decode($string, true);
		$openId = $result['open_id'];
		$user = WechatUser::where('open_id', $openId)->first();
        if (!$user) {
            return response()->json([
				'message' => 'not exist',
				'status_code' => 404,
			], 404);
        }
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

		$user = WechatUser::where('open_id', $openId)->first();;

		if (! $user) {
			return response()->json([
				'message' => 'not exist',
				'status_code' => 404,
			], 404);
		}

		// 获取问答数据
		$data = UserQuestion::where('open_id', $openId)->get()->toArray();

		// 统计问答数据
		$statistics = $this->getStatistics($data);

		$salary = 0;

		// 根据问答计算基础薪资
		$baseSalary = $this->getBaseSalary($statistics);

		$salary += $baseSalary;

		// 根据简历增加薪资
		$extraSalaryMap = $this->getExtraSalary($user);

		foreach ($extraSalaryMap as $item) {
			$salary += $item;
		}


		// 更新薪资
		$resume = $this->updateResume($user, $salary);

		// 获取描述
		$description = $this->getDescription($statistics);

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
		$syncData = [];

		foreach ($data as $item) {
			$syncData[$item['question_id']] = ['question_option_id' => $item['question_option_id']];
		}

		return $user->questions()->sync($syncData);
	}

	/**
	 * @param $user
	 * @param $salary
	 */
	protected function updateResume($user, $salary)
	{
		$resume = $user->resume;
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
			$questionOptions = QuestionOption::where('question_id', $item['question_id'])->get();
			if ($item['question_option_id'] == 1) {
				$result[intval($questionOptions[0]->character_type_id) - 1] += 1;
			} elseif ($item['question_option_id'] == 2) {
				$result[intval($questionOptions[1]->character_type_id) - 1] += 1;
			}
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
	protected function getExtraSalary($user)
	{
		$salaryMap = [];
		$resume = $user->resume;
		$education = $resume->education;
		// 获取教育背景
		$educationSalary = 0;
		$educationSalaryExtra = false;
		if ($education) {
			foreach ($education as $kind => $item) {
				switch ($kind) {
					case 'bachelor':
						$educationSalary += 1000;
						break;
					case 'master':
						$educationSalary += 500;
						break;
					case 'doctor':
						$educationSalary += 5000;
						break;
				}
				if (! $educationSalaryExtra && in_array($item, ['清华大学', '北京大学', '中国人民大学', '复旦大学', '上海交通大学'])) {
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
					case '校级':
						$honorSalary += 100;
						break;
					case '省级':
						$honorSalary += 200;
						break;
					case '国家级':
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
		if ($user->username) {
			$salaryMember += 200;
		}

		if ($user->mobile) {
			$salaryMember += 300;
		}
		$salaryMap['member'] = $salaryMember;

		return $salaryMap;

	}
}
