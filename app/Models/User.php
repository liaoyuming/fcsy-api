<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{

    public function resumes()
    {
        return $this->hasMany('App\Models\Resume');
    }
}
