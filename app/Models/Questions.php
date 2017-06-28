<?php

namespace App\Models;

use App\Models\BaseModel;

class Questions extends BaseModel
{
    public function questionnaire()
    {
        return $this->belongsTo('App\Models\Questionnaire');
    }
}
