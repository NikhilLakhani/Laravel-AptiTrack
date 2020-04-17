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

Route::get('login',function()
{
    return view('login',['use'=>0]);
})->name('login');
Route::post('verify','verifyuser@verifyu');
Route::post('verify2','verifyuser@verifyu2');
Route::get('sign_up',function()
{
    return view('sign_up',['use'=>0]);
});
Route::post('test','verifyuser@tat');
Route::post('progress','verifyuser@pg');
Route::post('home','verifyuser@hm');
Route::post('sub','verifyuser@ch');