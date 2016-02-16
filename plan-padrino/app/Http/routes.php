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
    return view('login');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('padrinos', function () {
    return view('padrinos');
});

Route::get('crear/usuario', function () {
    return view('crear_usuario');
});