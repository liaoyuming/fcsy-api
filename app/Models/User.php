<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{

    protected $fillable = ['mobile', 'password'];
    public function resumes()
    {
        return $this->hasMany('App\Models\Resume');
    }
}
