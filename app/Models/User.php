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
    public function resumes()
    {
        return $this->hasMany('App\Models\Resume');
    }
}
