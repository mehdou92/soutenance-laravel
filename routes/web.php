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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit-info-user', 'UserController@update');

Route::get('/user-list', 'UserController@list');

Route::get('/user-edit/{id}', 'UserController@edit');

Route::get('/show-profile/{id?}', function ($id) {
    return 'User '.$id;
});

Route::get('/show-profile/{id?}', 'UserController@showProfile');

