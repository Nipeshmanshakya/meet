<?php

Route::group(['middleware' => 'auth'], function(){
    Route::get('posts', 'PostController@index');
    Route::post('posts', 'PostController@postPost');
    Route::get('posts/create', 'PostController@create');
    Route::get('logout', 'LoginController@logout');
});
Route::group(['middleware' => 'guest'], function(){
    Route::get('register', 'LoginController@register');
    Route::post('register', 'LoginController@postRegister');
    Route::post('login', 'LoginController@postLogin');
    Route::get('login', 'LoginController@login');
});
Route::get('filter/{filter}', 'ImageController@index');
Route::get('filters', 'ImageController@filters');

Route::group(['prefix' => 'api', 'middleware' => 'auth-token'], function(){

    Route::get('posts', 'ApiController@posts');
});