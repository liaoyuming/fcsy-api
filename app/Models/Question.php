<?php

namespace App\Models;

use App\Models\BaseModel;

class Question extends BaseModel
{
    public function questionnaire()
    {
        return $this->belongsTo('App\Models\Questionnaire');
    }

    public function questionOptions()
    {
        return $this->hasMany('App\Models\QuestionOption');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users()
	{
		return $this->belongsToMany(User::class, 'user_question');
	}
}
