<?php

namespace App\Http\Requests\Api;

class WxUserCreateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'openId'     => 'required',
            'mobile'     => 'required',
            'code'       => 'required',
            'password'   => 'required | min:6',
            'nickName'   => 'required',
            'gender'     => 'required',
            'avatarUrl'  => 'required',
        ];
    }
}
