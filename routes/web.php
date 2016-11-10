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



Route::group(['middleware' => 'auth'], function(){
    Route::get('posts', 'PostController@index');
    Route::post('posts', 'PostController@postPost');
    Route::get('posts/create', 'PostController@create');
});
Route::group(['middleware' => 'guest'], function(){
    Route::get('register', 'LoginController@register');
    Route::post('register', 'LoginController@postRegister');
    Route::post('login', 'LoginController@postLogin');
    Route::get('login', 'LoginController@login');

});
