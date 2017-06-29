<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Transformers\ResumeTransformer;
use App\Models\Resume;
use App\Http\Requests\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

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
     * @return \Dingo\Api\Http\Response;
     */
    public function changeResumeStatus($id, $status)
    {
        $result = Resume::where('user_id', $id)->update(['is_open' => $status]);
        return response()->json([
                'result' => $result,
                'msg'    => '更新简历状态成功'
        ], 200);
    }

}
