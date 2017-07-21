<?php

//Rutas del Login
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


// Rutas del Home/Sistema
Route::get('/',[ 'as' => 'home', 'uses' => 'HomeController@index']);
Route::get('contacto',[ 'as' => 'contacto', 'uses' => 'HomeController@contacto']);
Route::get('listado' ,[ 'as' => 'listado', 'uses' => 'HomeController@listado']);

Route::resource('maestros','MaestrosController');
