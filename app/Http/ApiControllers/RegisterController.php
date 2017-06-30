<?php

namespace App\Http\ApiControllers;

use App\Http\Requests\Request;
use App\Models\User;
use App\Models\WechatUser;

class RegisterController
{
    public function register(Request $request) {

        if (! (new SmsController())->verifySmsCode($request->get('telphone'), $request->get('code'))) {
            return response()->json([
                'result' => false,
                'msg'    => '短信验证码不正确'
            ], 403);
        }

        $userData = $request->only([
            'username' => $request->get('nickName'),
            'mobile'   => $request->get('telphone'),
            'password' => bcrypt($request->get('password'))
        ]);

        $user = User::create($userData);

        $wechatData = [
            'user_id' => $user->id,
            'openId'  => $request->get('openId'),
            'nickName'  => $request->get('nickName'),
            'gender'  => $request->get('gender'),
            'city'  => $request->get('city'),
            'province'  => $request->get('province'),
            'country'  => $request->get('country'),
            'avatarUrl'  => $request->get('avatarUrl'),
        ];

        $result = WechatUser::create($wechatData);

        if ($result->id > 0) {
            return response()->json([
                'result' => $result,
                'msg'    => '注册用户成功'
            ], 200);
        }

        return response()->json([
            'result' => $result,
            'msg'    => '注册用户失败'
        ], 402);
    }
}
