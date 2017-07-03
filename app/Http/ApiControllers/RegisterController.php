<?php

namespace App\Http\ApiControllers;

use App\Models\User;
use App\Models\WechatUser;
use App\Http\Requests\Request;
use App\Http\Requests\Api\RegisterCheckRequest;
use App\Http\Requests\Api\RegisterRequest;

use Validator;

class RegisterController extends ApiController
{
    public function index(RegisterRequest $request)
    {
       if (! (new SmsController())->verifySmsCode($request->get('mobile'), $request->get('code'))) {
            return response()->json([
                'result' => false,
                'status_code' => 40001,  // todo define ErrorType 常量
                'msg'    => '短信验证码不正确'
            ], 400);
        }

        $data = $request->all();
        $user = User::updateOrCreate([
                'mobile'   => $data['mobile']
            ],[
                'username' => array_get($data, 'username', $data['nickName']),
                'password' => bcrypt($data['password'])
            ]);
        $result = WechatUser::updateOrCreate([
                'open_id' => $data['openId']
            ], [
                'user_id'   => $user->id,
                'nickname'  => $data['nickName'],
                'gender'    => $data['gender'],
                'city'      => $data['city'],
                'province'  => $data['province'],
                'country'   => $data['country'],
                'avatar_url' => $data['avatarUrl'],
            ]);

        if ($result->id > 0) {
            return response()->json([
                'result' => $result,
                'msg'    => '注册用户成功',
                'status_code' => 200
            ], 200);
        }

        return response()->json([
            'result' => $result,
            'status_code' => 402,
            'msg'    => '注册用户失败'
        ], 402);
    }

    public function check(RegisterCheckRequest $request)
    {
        $wechat_user = WechatUser::where('open_id', $request->input('open_id'))->first();

        if (!$wechat_user) {
            return response()->json([
                'result' => false,
                'message' => '微信用户未注册',
				'status_code' => 20001,
            ], 402);
        }

        $result = !!$wechat_user->user;

        return response()->json([
            'result' => $result,
            'msg'    => $result ? '用户已注册' : '用户未注册',
            'user_id' => $wechat_user->user_id,
        ], 200);
    }
}
