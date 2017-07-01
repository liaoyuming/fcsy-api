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
}
