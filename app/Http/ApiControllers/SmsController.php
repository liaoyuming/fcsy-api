<?php
namespace App\Http\ApiControllers;

use App\Http\Requests\Request;
use Overtrue\EasySms\EasySms;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Config;

class SmsController extends ApiController
{
    /**
     * 改变简历状态
     *
     * @param Request $request
     *
     * @return \Dingo\Api\Http\Response;
     */
    public function getSmsCode(Request $request)
    {
        $mobile = $request->get('mobile');
        if (empty($mobile)) {
            return $this->response()->json([
                'status' => false,
                'msg'    => '电话不能为空'
            ], 401);
        }
        return response()->json($this->sendSms($mobile), 200);
    }

    /**
     * 发送短信
     *
     * @param int $mobile
     *
     * @return array $result
     */
     private function sendSms($mobile)
     {
         $config = Config::get('sms.yunpian');
         $easySms = new EasySms($config);
         $code = $this->generateSmsCode($mobile);

         $result = $easySms->send(
             $mobile,
             [
                 'content'  => '您的验证码是' . $code,
                 'template' => 'SMS_001',
                 'data' => [
                     'code' => $code
                 ],
             ]
         );

         return $result;
     }

    /**
     * 生成code
     *
     * @param int $mobile
     *
     * @return int $code;
     */
     private function generateSmsCode($mobile)
     {
        $code = random_int(100000, 999999);
        $this->setCodeCache($mobile, $code);
        return $code;
     }

    /**
     * 设置code缓存
     *
     * @param int $mobile
     * @param int $code
     *
     */
    private function setCodeCache($mobile, $code)
    {
        $expiresAt = Carbon::now()->addMinutes(10);
        Cache::put($mobile, $code, $expiresAt);
    }

    /**
     *  移除code缓存
     *
     * @param int $mobile
     * @param int $code
     *
     * @return bool;
     */
    private function removeCodeCache($mobile)
    {
        return Cache::forget($mobile);
    }

    /**
     *  验证code
     *
     * @param int $mobile
     * @param int $code
     *
     * @return bool
     */
    public function verifySmsCode($mobile, $code)
    {
        $value = Cache::get($mobile);
        if ($value == $code) {
           // 移除code缓存
           $this->removeCodeCache($mobile);
           return true;
        }
       return false;
    }
}
