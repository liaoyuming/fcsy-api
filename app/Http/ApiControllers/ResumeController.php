<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Transformers\ResumeTransformer;
use App\Models\Resume;
use App\Http\Requests\Request;

class ResumeController extends ApiController
{

    public function index()
    {
        $resume = Resume::all();
        return $this->response->collection($resume, new ResumeTransformer());
    }

    /**
     * 改变简历状态
     *
     * @param int $status
     * @param int $id userId
     *
     * @return array | bool
     */
    public function changeResumeStatus($status, $id)
    {
        $result = Resume::where('user_id', $id)->update(['is_open' => $status]);
        dd($result);
    }


}
