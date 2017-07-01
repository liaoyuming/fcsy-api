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
    public function resumes()
    {
        return $this->hasMany('App\Models\Resume');
    }
}
