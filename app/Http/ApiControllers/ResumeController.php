<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Transformers\ResumeTransformer;
use App\Models\Resume;


class ResumeController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        $resume = Resume::all();
        return $this->response->collection($resume, new ResumeTransformer());
    }

}
