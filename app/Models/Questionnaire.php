<?php

namespace App\Models;

use App\Models\BaseModel;

class Questionnaire extends BaseModel
{

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

}
