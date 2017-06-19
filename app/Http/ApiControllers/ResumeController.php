<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
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
        return Resume::all();
    }

}
