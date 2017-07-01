<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Http\Requests\Request;
use App\Models\CharacterSalary;
use App\Models\CharacterType;
use App\Models\QuestionOption;
use App\Models\Resume;
use App\Models\User;
use App\Models\UserQuestion;
use App\Transformers\UserTransformer;

class UserController extends ApiController
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	public function index()
	{
		$user = User::all();
		return $this->response->collection($user, new UserTransformer());
	}

	public function show()
	{

	}

	/**
	 * @param Request $request
	 */
	public function update(Request $request)
	{
		$string = strval($request->getContent());
		$result = json_decode($string);
		$userId = $result->user_id;

		$key = $result->key;
		$data = $result->data;
		$user = User::find($userId);
		$resume = $user->resume;
		$resume->{$key} = $data;
		$result = $resume->save();
		if ($result) {
			return response()->json($result);
		}
	}

	/**
	 * @param Request $request
	 * @return mixed
	 */
	public function answer(Request $request)
	{
		//		$userId = $request->get('user_id');
		//		$user = User::find($userId);
		//		$data = $request->get('questionnaire');
		$string = strval($request->getContent());
		$result = json_decode($string);
		$userId = $result->user_id;
		$user = User::find($userId);
		$data = $result->questionnaire;
		return $this->syncData($user, $data);
	}

	/**
	 * @param Request $request
	 */
	public function information($userId)
	{
		$user = User::find($userId);

		// 获取问答数据
		$data = UserQuestion::where('user_id', $userId)->get()->toArray();

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

		$salaryMap['education'] = $educationSalary;

		// 社工经历
		$practiceSalary = 0;
		$practice = $resume->practice;

		foreach ($practice as $kind => $item) {
			$practiceSalary += 100;
		}
		if ($practiceSalary >= 300) {
			$practiceSalary = 300;
		}
		$salaryMap['practice'] = $practiceSalary;

		// 荣誉奖励
		$honorSalary = 0;
		$honor = $resume->honor;

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
		if ($honorSalary >= 800) {
			$honorSalary = 800;
		}
		$salaryMap['honor'] = $honorSalary;

		// 工作经历
		$workSalary = 0;
		$work = $resume->work;

		foreach ($work as $kind => $item) {
			$workSalary += 200;
		}
		if ($workSalary >= 1000) {
			$workSalary = 1000;
		}
		$salaryMap['work'] = $workSalary;

		// 证书特长
		$specialitySalary = 0;
		$speciality = $resume->speciality;

		foreach ($speciality as $kind => $item) {
			$specialitySalary += 100;
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
