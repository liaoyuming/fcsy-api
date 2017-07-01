<?php

namespace App\Http\Requests\Api;

class QuestionnaireRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
        ];
    }
}
