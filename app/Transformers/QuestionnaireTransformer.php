<?php

namespace App\Transformers;

class QuestionnaireTransformer extends BaseTransformer
{
    public function transform($model)
    {
        return $model->toArray();
    }
}
