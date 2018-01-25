<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::resource('movie','MovieController');

Route::group(['middleware' => ['web']], function () {
	Route::resource('task','TaskController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/','FrontController@index');
    Route::get('admin','FrontController@admin');    
//    Route::get('/home', 'HomeController@index');
    Route::resource('usuario','UsuarioController');
    Route::resource('log','LogController');
    Route::resource('genero','GeneroController');
    Route::get('generos','GeneroController@listing');  
});



Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
