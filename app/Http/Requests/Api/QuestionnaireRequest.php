<?php

namespace App\Http\Requests\Api;

class QuestionnaireRequest extends ApiRequest
{
    protected function getRestrictions()
    {
        return [
            'id' => [
                'required' => true,
            ],
        ];
    }
}
