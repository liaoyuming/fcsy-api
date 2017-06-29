<?php
/**
 * Created by PhpStorm.
 * User: laputa
 * Date: 29/06/2017
 * Time: 6:32 PM
 */

namespace App\Http\ApiControllers;

use App\Http\Requests\Request;
use Overtrue\EasySms\EasySms;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

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
        $telphone = $request->get('telphone');
        if (empty($telphone)) {
            return $this->response()->json([
                'status' => false,
                'msg'    => '电话不能为空'
            ], 401);
        }
        return $this->response()->json($this->sendSms($telphone), 200);
    }

    /**
     * 发送短信
     *
     * @param int $telphone
     *
     * @return array $result
     */
     private function sendSms($telphone)
     {
         $config = [
             // HTTP 请求的超时时间（秒）
             'timeout' => 5.0,

             // 默认发送配置
             'default' => [
                 // 网关调用策略，默认：顺序调用
                 'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

                 // 默认可用的发送网关
                 'gateways' => [
                     'yunpian'
                 ],
             ],
             // 可用的网关配置
             'gateways' => [
                 'errorlog' => [
                     'file' => '/tmp/easy-sms.log',
                 ],
                 'yunpian' => [
                     'api_key' => Config::get('yunpian.api_key'),
                 ]
             ],
         ];
         $easySms = new EasySms($config);
         $code = $this->generateSmsCode($telphone);

         $result = $easySms->send(
             $telphone,
             [
                 'content'  => '您的验证码为: ' . $code,
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
     * @param int $telphone
     *
     * @return int $code;
     */
     private function generateSmsCode($telphone)
     {
        $code = random_int(100000, 999999);
        $this->setCodeCache($telphone, $code);
        return $code;
     }

    /**
     * 设置code缓存
     *
     * @param int $telphone
     * @param int $code
     *
     */
    private function setCodeCache($telphone, $code)
    {

        $expiresAt = Carbon::now()->addMinutes(10);
        Cache::put($telphone, $code, $expiresAt);
    }

    /**
     *  移除code缓存
     *
     * @param int $telphone
     * @param int $code
     *
     * @return bool;
     */
    private function removeCodeCache($telphone)
    {
        return Cache::forget($telphone);
    }

    /**
     *  验证code
     *
     * @param int $telphone
     * @param int $code
     *
     * @return bool
     */
    public function verifySmsCode($telphone, $code)
    {
       $value = Cache::get($telphone);

       if ($value == $code) {
           // 移除code缓存
           $this->removeCodeCache($telphone);
           return true;
       }
       return false;
    }
}