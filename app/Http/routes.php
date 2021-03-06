<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blade', function () {
    return view('child');
});


Route::get('login/{nome}', 'TopNewsController@loginController') ;
Route::get('news', 'TopNewsController@newsController') ;
Route::get('test', 'TopNewsController@testController') ;
Route::get('/{newList?}', 'NewsController@listing') ;
Route::get('/{newList?}', 'NewsController@listing') ;