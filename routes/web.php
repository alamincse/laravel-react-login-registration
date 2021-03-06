<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('registration', 'App\Http\Controllers\UserController@index');
Route::get('login', 'App\Http\Controllers\UserController@index');
Route::post('registration', 'App\Http\Controllers\UserController@store');
Route::post('login', 'App\Http\Controllers\UserController@login');
Route::post('save', 'App\Http\Controllers\UserController@saveRoom');

