<?php

namespace App\Transformers;

class ResumeTransformer extends BaseTransformer
{
    public function transform($model)
    {
        return [
            'name' => $model->name,
            'sex' => $model->sex,
            'position' => $model->position,
            'city' => $model->city,
            'mobile' => $model->mobile,
            'email' => $model->email,
            'value' => $model->value,
            'is_open' => $model->is_open,
            'user' => $model->user,
        ];
    }
}
