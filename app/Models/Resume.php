<?php

namespace App\Models;

use App\Models\BaseModel;

class Resume extends BaseModel
{
    protected $fillable = [
        'open_id',
        'gender',
        'name',
        'position',
        'city',
        'mobile',
        'email',
        'is_open',
        'value',
    ];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
    {
        return $this->belongsTo(User::class);
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
