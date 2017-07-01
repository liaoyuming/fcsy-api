<?php

namespace App\Http\Requests\Api;

class RegisterRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'openId'     => 'required',
            'telphone'   => 'required',
            'code'       => 'required',
            'password'   => 'required | min:6',
            'nickName'   => 'required',
            'gender'     => 'required',
            'avatarUrl'  => 'required',
        ];
    }
}
