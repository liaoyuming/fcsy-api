<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    protected $fillable = [
        'user_id',
        'open_id',
        'nickname',
        'gender',
        'city',
        'province',
        'country',
        'avatar_url'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function resume()
	{
		return $this->hasOne(Resume::class, 'open_id', 'open_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function questions()
	{
		return $this->belongsToMany(Question::class, 'user_question', 'open_id', 'question_id');
	}

}
