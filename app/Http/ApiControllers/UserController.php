<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Http\Requests\Request;
use App\Models\CharacterSalary;
use App\Models\CharacterType;
use App\Models\QuestionOption;
use App\Models\Resume;
use App\Models\User;
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
	public function statistics(Request $request)
	{
		$userId = $request->get('user_id');
//		$userId = 1;
		$user = User::find($userId);
		$data = $request->get('questionnaire');
		/*
		数据形式，供参考
		$data = [
			[
				'question_id' => 1,
				'question_option_id' => 2
			],
			[
				'question_id' => 1,
				'question_option_id' => 2
			]
		];
		*/
		/*
		$data = [];
		for ($i = 1; $i <= 36; $i ++) {
			array_push($data, [
				'question_id' => $i,
				'question_option_id' => rand(1, 2)
			]);
		}
		*/


		// 回答存数据库
		$this->syncData($user, $data);


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


		// 排名前三人格
		$maxThree = $this->max($result, 3);

		$max = $this->max($maxThree, 1);

		$character_id = array_keys($max)[0] + 1;

		$character = CharacterType::find($character_id);
		
		$salary = 0;

		// 前三人格薪资取平均
		foreach ($maxThree as $character_id => $score) {
			$salaryMap = CharacterSalary::where('character_id', $character_id + 1)->first();
			$salary += (($salaryMap->min_salary + $salaryMap->max_salary) / 2);
		}
		$salary /= 3;

		$resume = $this->updateResume($user, $salary);
		return response()->json(array_merge($resume->toArray(), ['character' => $character->display_name]));

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

		$user->questions()->sync($syncData);
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

}
