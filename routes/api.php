<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1',[
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array']
] , function($api) {

    //登录接口 1分钟10次
    $api->group([
//        'middleware' => 'api.auth'
    ], function ($api) {
        $api->get('categories', 'CategoryController@index')->name('categories.index');
    });

});



