<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\ApiControllers'], function ($api) {

        $api->get('user', 'UserController@index');
        $api->get('resume', 'ResumeController@index');

        $api->group(['prefix' => 'questionnaire'], function ($api) {
                $api->get('/', 'QuestionnaireController@index');
                $api->get('/show', 'QuestionnaireController@show');
            });

    });
});
