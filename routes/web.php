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

//STORE ROUTES
Route::post('/c', 'CenterController@store');
Route::post('/u', 'UserController@store');

//CREATE ROUTES
Route::get('/c/register', 'CenterController@create');
Route::get('/u/register', 'UserController@create');

//SHOW ROUTES
Route::get('/centers', 'CenterController@show');
Route::get('/admins', 'UserController@show');
Route::get('/appointments', 'AppointmentController@show');
Route::get('/bloodbags', 'BloodBagController@show');
Route::get('/donations', 'DonationController@show');
Route::get('/donors', 'DonorController@show');
Route::get('/inventory', 'InventoryController@show');
Route::get('/labscientists', 'LabScientistController@show');
Route::get('/patients', 'PatientController@show');
Route::get('/preexams', 'PreExamController@show');
Route::get('/transactions', 'TransactionController@show');
Route::get('/transfusions', 'TransfusionController@show');

Route::get('/home', 'HomeController@index')->name('home');