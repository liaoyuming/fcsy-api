<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{

	protected $fillable = [
		'username',
		'mobile',
		'password'
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
