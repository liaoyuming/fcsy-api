<?php

namespace App\Transformers;

class QuestionnaireTransformer extends BaseTransformer
{
    public function transform($model)
    {
        foreach ($model->questions as $key => $question) {
            $model->questions[$key]['question_options'] = $question->questionOptions;
        }
        return $model->toArray();
    }
}
