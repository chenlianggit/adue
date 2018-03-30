<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/appsec','AppsecController@index');

    //移动安全
    Route::group(['prefix' => 'appsec'], function () {
        //移动安全首页
        Route::get('/', ['as' => 'appsec', 'uses' => 'AppsecController@index']);
        //安全扫描
        Route::get('/scan', [ 'uses' => 'AppsecController@scan']);
        //移动加固
        Route::get('/reinforce', [ 'uses' => 'AppsecController@reinforce']);
        //文件上传
        Route::get('/upload', [ 'uses' => 'AppsecController@upload']);

    });

    //测试
    Route::get('/ali', [ 'uses' => 'AppsecController@postAli']);



});
