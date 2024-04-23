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


Route::resource('members', App\Http\Controllers\MemberController::class);


Route::resource('bookings', App\Http\Controllers\bookingController::class);


Route::resource('courts', App\Http\Controllers\courtController::class);

Route::get('/map', 'App\Http\Controllers\memberController@showmap')->name('members.showmap');
