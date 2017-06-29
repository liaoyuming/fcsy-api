<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(env('API_VERSION'), function ($api) {
    $api->group(['namespace' => 'App\Http\ApiControllers'], function ($api) {

        $api->get('user', 'UserController@index');
        $api->get('resume', 'ResumeController@index');

        // 设置简历是否可见
        $api->post('changeResumeStatus/{id}/{status}', 'ResumeController@changeResumeStatus');

        $api->group(['prefix' => 'questionnaire'], function ($api) {
                $api->get('/', 'QuestionnaireController@index');
                $api->get('/show', 'QuestionnaireController@show');
            });
    });
});
