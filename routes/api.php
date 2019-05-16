<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1',[
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array']
] , function($api) {

    //登录接口 1分钟10次
    $api->group([
        'middleware' => ['auth:api', 'admin']
    ], function ($api) {

        $api->get('categories', 'CategoryController@index')->name('api.categories.index');
        // 图片资源
        $api->post('images', 'ImageController@store')
            ->name('api.images.store');
        //articles
        $api->get('articles', 'ArticleController@index')->name('api.articles.index');
        $api->post('articles', 'ArticleController@store')
            ->name('api.articles.store');
    });

});



