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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hasil', 'App\Http\Controllers\SportController@index');
Route::get('/details', 'App\Http\Controllers\SportController@details');
Route::get('/detailklub', 'App\Http\Controllers\SportController@detailklub');
Route::get('/jadwal', 'App\Http\Controllers\SportController@jadwal');