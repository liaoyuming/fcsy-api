<?php

namespace App\Transformers;

class CharacterTypeTransformer extends BaseTransformer
{
    public function transform($model)
    {
        return $model->toArray();
    }
}
