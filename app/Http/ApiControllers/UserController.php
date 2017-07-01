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
		$userId = $request->get('user_id');
		$key = $request->get('key');
		$data = $request->get('data');
		$user = User::find($userId);
		if ($result = $user->update([$key => $data])) {
			return response()->json($result);
		}
	}

	/**
	 * @param Request $request
	 * @return mixed
	 */
	public function syncQuestionnaire(Request $request)
	{
		$userId = $request->get('user_id');
		$user = User::find($userId);
		$data = $request->get('questionnaire');
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

		// 根据问答计算基础薪资
		$salary = $this->getBaseSalary($statistics);

		// 更新薪资
		$resume = $this->updateResume($user, $salary);

		// 获取描述
		$description = $this->getDescription($statistics);

		// 返回描述数据
		return response()->json(array_merge($resume->toArray(), ['description' => $description]));

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

}
