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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    // PATCH ROUTES
    Route::patch('/admin/{admin}', 'ProfileController@update')->name('admin.update');

    //STORE ROUTES
    Route::post('/c', 'CenterController@store');
    Route::post('/u', 'UserController@store');

    //CREATE ROUTES
    Route::get('/c/register', 'CenterController@create');
    Route::get('/u/register', 'UserController@create');

    //SHOW ROUTES
    Route::get('/centers', 'CenterController@index');
    Route::get('/admins', 'UserController@index');
    Route::get('/appointments', 'AppointmentController@show');
    Route::get('/bloodbags', 'BloodBagController@index');
    Route::get('/donations', 'DonationController@show');
    Route::get('/donors', 'DonorController@index');
    Route::get('/inventory', 'InventoryController@index');
    Route::get('/labscientists', 'LabScientistController@show');
    Route::get('/patients', 'PatientController@show');
    Route::get('/preexams', 'PreExamController@show');
    Route::get('/transactions', 'TransactionController@show');
    Route::get('/transfusions', 'TransfusionController@show');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@show')->name('home')->name('admin.show');
});
