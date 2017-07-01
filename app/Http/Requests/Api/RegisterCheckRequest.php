<?php

namespace App\Http\Requests\Api;

class RegisterCheckRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'open_id'     => 'required',
        ];
    }
}
