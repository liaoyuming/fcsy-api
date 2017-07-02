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
	

}
