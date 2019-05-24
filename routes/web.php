<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/articles', 'ArticleController@index')->name('articles.index');

Route::get('/gifts/{id}', 'GiftController@show')->name('gifts.show');

//Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'dashboard']], function () {
//    Route::get('{path?}', 'HomeController@index')->where('path', '[\/\w\.-]*');
//});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('{path?}', 'HomeController@dashboard')->where('path', '[\/\w\.-]*');
});
