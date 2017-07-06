<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\ApiControllers'], function ($api) {

        $api->get('user', 'UserController@index');
        $api->get('resume', 'ResumeController@index');

        $api->get('character/show', 'CharacterTypeController@show');

        // 设置简历是否可见
        $api->post('changeResumeStatus', 'ResumeController@changeResumeStatus');
        // 短信路由
        $api->post('getSmsCode', 'SmsController@getSmsCode');

        // 登录路由
        $api->post('login', 'LoginController@authenticate');
        // 微信登录路由
        $api->post('wechat/login_info', 'WechatController@loginInfo');


        $api->group(['prefix' => 'questionnaire'], function ($api) {
                $api->get('/', 'QuestionnaireController@index');
                $api->get('/show', 'QuestionnaireController@show');
        });

        $api->group(['prefix' => 'register'], function ($api) {
                $api->post('/', 'RegisterController@index');
                $api->post('/check', 'RegisterController@check');
                $api->post('/wechat', 'RegisterController@wechat');
        });

        $api->group(['prefix' => 'wxuser'], function ($api) {
                $api->post('/answer', 'WechatUserController@answer');
                $api->post('/update', 'WechatUserController@update');
                $api->post('/create', 'WechatUserController@create');
                $api->post('information/{user}', 'WechatUserController@information');
        });
    });
});
