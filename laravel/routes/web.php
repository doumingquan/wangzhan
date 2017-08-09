<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('admin/login','Admin\LoginController@login');
Route::get('code','Admin\LoginController@code');
Route::get('jiekou','Admin\LoginController@jiekou');

Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {

    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('logout','LoginController@logout');

    Route::resource('category','CategoryController');
    Route::resource('article','ArticleController');
    Route::get('upload','ArticleController@upload');
});





















