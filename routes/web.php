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

Route::get('/appointments', 'AppointmentController@index');
Route::get('/clients', 'ClientController@index');
Route::get('/users', 'UserController@index');

Route::get('/appointments/create', 'AppointmentController@create');
Route::get('/clients/create', 'ClientController@create');
Route::get('/users/create', 'UserController@create');

Route::post('/appointments', 'AppointmentController@store');
Route::post('/clients', 'ClientController@store');
Route::post('/users', 'UserController@store');

Route::get('/home', 'LoginController@index');
Route::get('/clients/{client}', 'ClientController@show');
Route::get('/appointments/{appointment}', 'AppointmentController@show');
Route::get('/users/{user}', 'UserController@show');

Route::get('/appointments/{appointment}/edit', 'AppointmentController@edit');
Route::get('/clients/{client}/edit', 'ClientController@edit');
Route::get('/users/{user}/edit', 'UserController@edit');


Route::patch('/appointments/{appointment}', 'AppointmentController@update');
Route::put('/clients/{client}', 'ClientController@update');
Route::put('/users/{user}', 'UserController@update');

Route::delete('/appointments/{appointment}', 'AppointmentController@destroy');
Route::delete('/clients/{client}', 'ClientController@destroy');
Route::delete('/users/{user}', 'UserController@destroy');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');













Auth::routes();

