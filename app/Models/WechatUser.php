<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    protected $table = 'wechat_user';
    protected $fillable = [
        'openId',
        'nickName',
        'gender',
        'city',
        'province',
        'country',
        'avatarUrl'
    ];
}
