<?php

namespace App\Http\ApiControllers;

use App\Http\Requests\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WechatController extends ApiController
{
    public function loginInfo(Request $request)
    {
        $code = $request->get('code');
        if (empty($code)) {
            return response()->json([
                    'result' => false,
                    'msg'    => '微信登录失败',
                ], 403);
        }


        $xcx = app()->make("wxxcx");
        $loginInfo = $xcx->getLoginInfo($code);

        return response()->json([
            'result' => true,
            'msg'    => '微信登录成功',
            'data'   => $loginInfo,
        ]);
    }
}
