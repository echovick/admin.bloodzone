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
    return view('auth.login');
});


Auth::routes();

Route::post('/c', 'CenterController@store');
Route::post('/u', 'UserController@store');
Route::get('/c/register', 'CenterController@create');
Route::get('/u/register', 'UserController@create');

Route::get('/home', 'HomeController@index')->name('home');