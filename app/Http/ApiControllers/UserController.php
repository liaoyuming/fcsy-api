<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
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
        return $this->collection($user, new UserTransformer());
    }

    public function show()
    {

    }

}
