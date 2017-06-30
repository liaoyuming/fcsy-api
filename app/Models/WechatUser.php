<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    protected $fillable = [
        'open_id',
        'nickname',
        'gender',
        'city',
        'province',
        'country',
        'avatar_url'
    ];
}
