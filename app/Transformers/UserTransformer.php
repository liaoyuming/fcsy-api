<?php

namespace App\Transformers;

class UserTransformer extends BaseTransformer
{
    public function transform($model)
    {
        return [
            'username' => $model->username,
            'mobile' => $model->mobile,
            'is_member' => $model->is_member,
            'resumes' => $model->resumes,
        ];
    }
}
