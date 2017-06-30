<?php

namespace App\Http\ApiControllers;

use App\Models\User;
use App\Models\WechatUser;
use App\Http\Requests\Request;
use App\Http\Requests\APi\RegisterCheckRequest;

class RegisterController
{
    public function index(Request $request)
    {

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
            'open_id'  => $request->get('openId'),
            'nickname'  => $request->get('nickName'),
            'gender'  => $request->get('gender'),
            'city'  => $request->get('city'),
            'province'  => $request->get('province'),
            'country'  => $request->get('country'),
            'avatar_url'  => $request->get('avatarUrl'),
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

    public function check(RegisterCheckRequest $request)
    {
        $wechat_user = WechatUser::where('open_id', $request->input('open_id'))->first();
        
        $result = $wechat_user ? !!$wechat_user->user : false;

        return response()->json([
            'result' => $result,
            'msg'    => $result ? '用户已注册' : '用户未注册',
        ], 200);
    }
}
