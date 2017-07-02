<?php

namespace App\Http\Requests\Api;

class WxUserCreateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'open_id'    => 'required',
            'nickName'   => 'required',
            'avatarUrl'  => 'required',
        ];
    }
}
