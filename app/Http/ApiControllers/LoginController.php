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
    public function Authentic(Request $request)
    {
        if (Auth::attempt(['mobile' => $request->get('mobile'), 'password' => $request->get('password')])) {
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
            , 403);

    }
}