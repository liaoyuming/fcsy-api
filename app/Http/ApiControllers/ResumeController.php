<?php

namespace App\Http\ApiControllers;

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
     * @param Request $request
     *
     * @return \Dingo\Api\Http\Response;
     */
    public function changeResumeStatus(Request $request)
    {
        $result = Resume::where('user_id', $request->get('id'))->update(['is_open' => $request->get('status')]);
        return response()->json([
                'result' => $result,
                'msg'    => '更新简历状态成功'
        ], 200);
    }

}
