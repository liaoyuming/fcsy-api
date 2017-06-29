<?php

namespace App\Http\ApiControllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Dingo\Api\Routing\Helpers;
use Iwanli\Wxxcx\Wxxcx;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Helpers;

    protected $wxxcx;

    public function __construct(Wxxcx $wxxcx)
    {
        $this->wxxcx = $wxxcx;
    }


    //encryptedData 和 iv 在小程序端使用 wx.getUserInfo 获取
    protected function getWxUserInfo()
    {
       return $this->wxxcx->getUserInfo(request('encryptedData', ''), request('iv', ''));
    }

    //code 在小程序端使用 wx.login 获取
    protected function getWxLoginInfo()
    {
        return $this->wxxcx->getLoginInfo(request('code', ''));
    }
}
