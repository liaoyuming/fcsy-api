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
		'member_expire_time'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function resume()
	{
		return $this->hasOne(Resume::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function questions()
	{
		return $this->belongsToMany(Question::class, 'user_question');
	}
	
}
