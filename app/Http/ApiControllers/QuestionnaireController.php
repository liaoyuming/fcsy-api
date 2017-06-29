<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Models\Questionnaire;
use App\Transformers\QuestionnaireTransformer;
use App\Http\Requests\Api\QuestionnaireRequest;

class QuestionnaireController extends ApiController
{

    public function index()
    {
        $questionnaires = Questionnaire::all();

        return $this->response->collection($questionnaires, new QuestionnaireTransformer());
    }

    public function show(QuestionnaireRequest $request)
    {
        $questionnaire = Questionnaire::find($request->id);
        foreach ($questionnaire->questions as $key => $question) {
            $questionnaire->questions[$key]['question_options'] = $question->questionOptions;
        }
        return $this->response->item($questionnaire, new QuestionnaireTransformer());
    }
}
