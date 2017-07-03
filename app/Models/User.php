<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{
	protected $table = 'users';

	protected $fillable = [
		'username',
		'mobile',
		'password',
	];


}
