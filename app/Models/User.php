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

	/**
	 * @param $education
	 */
	public function setEducationAttribute($education)
	{
		$this->attributes['education'] = serialize($education);
	}

	/**
	 * @param $education
	 */
	public function getEducationAttribute($education)
	{
		return unserialize($education);
	}

	/**
	 * @param $practice
	 */
	public function setPracticeAttribute($practice)
	{
		$this->attributes['practice'] = serialize($practice);
	}

	/**
	 * @param $practice
	 */
	public function getPracticeAttribute($practice)
	{
		return unserialize($practice);
	}

	/**
	 * @param $honor
	 */
	public function setHonorAttribute($honor)
	{
		$this->attributes['honor'] = serialize($honor);
	}

	/**
	 * @param $honor
	 */
	public function getHonorAttribute($honor)
	{
		return unserialize($honor);
	}

	/**
	 * @param $work
	 */
	public function setWorkAttribute($work)
	{
		$this->attributes['work'] = serialize($work);
	}

	/**
	 * @param $work
	 */
	public function getWorkAttribute($work)
	{
		return unserialize($work);
	}

	/**
	 * @param $education
	 */
	public function setSpecialityAttribute($speciality)
	{
		$this->attributes['speciality'] = serialize($speciality);
	}

	/**
	 * @param $education
	 */
	public function getSpecialityAttribute($speciality)
	{
		return unserialize($speciality);
	}

}
