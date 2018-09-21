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

Route::get('/', function () {
    return redirect('admin');
});

Route::group(['prefix' => 'admin'],function (){
    //显示页面
    Route::get('register','UsersController@register');
    //注册验证
    Route::post('Users','UsersController@Create');
    //跳转到登入页面
    Route::get('login','UsersController@Login');
});
