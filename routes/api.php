<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(env('API_VERSION'), function ($api) {
    $api->group(['namespace' => 'App\Http\ApiControllers'], function ($api) {

        $api->get('user', 'UserController@index');
        $api->get('resume', 'ResumeController@index');

        // 设置简历是否可见
        $api->post('changeResumeStatus', 'ResumeController@changeResumeStatus');
        // 短信路由
        $api->post('getSmsCode', 'SmsController@getSmsCode');
        // 注册路由
        $api->post('register', 'RegisterController@register');
        // 登录路由
        $api->post('login', 'LoginController@Authentic');
        $api->group(['prefix' => 'questionnaire'], function ($api) {
                $api->get('/', 'QuestionnaireController@index');
                $api->get('/show', 'QuestionnaireController@show');
        });
    });
});
