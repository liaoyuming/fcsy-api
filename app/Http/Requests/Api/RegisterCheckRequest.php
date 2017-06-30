<?php

namespace App\Http\Requests\Api;

class RegisterCheckRequest extends ApiRequest
{
    protected function getRestrictions()
    {
        return [
            'app_id' => [
                'required' => true,
            ],
        ];
    }
}
