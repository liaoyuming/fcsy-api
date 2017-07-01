<?php
/**
 * Created by PhpStorm.
 * User: laputa
 * Date: 29/06/2017
 * Time: 6:32 PM
 */

namespace App\Http\ApiControllers;

use App\Http\Requests\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function authenticate(Request $request)
    {
        $authData = [
                'mobile'   => $request->get('telphone'),
                'password' => $request->get('password')
        ];
        if (Auth::attempt($authData)) {
            return response()->json(
                [
                    'result' => Auth::user(),
                    'msg'    => '登录成功'
                ]
            , 200);
        }

        return response()->json(
            [
                'result' => false,
                'msg'    => '登录失败'
            ]
            , 408);
    }

    public function wechat(Request $request)
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
