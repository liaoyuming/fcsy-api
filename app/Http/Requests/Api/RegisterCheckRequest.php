<?php

namespace App\Http\Requests\Api;

class RegisterCheckRequest extends ApiRequest
{
    protected function getRestrictions()
    {
        return [
            'open_id' => [
                'required' => true,
            ],
        ];
    }
}
