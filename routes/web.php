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
// Laravel 09 課題３ Route::get('xxx','AAAcontroller@bbb')

Route::get('/', function () {
    return view('welcome');
});
