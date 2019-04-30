<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



$api = app('Dingo\Api\Routing\Router');

$api->version('v1',[
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['serializer:array']
] , function($api) {

});


