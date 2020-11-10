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
    return view('landing/index');
});
Route::get('/etalase', function () {
    return view('landing/etalase');
});
Route::get('/tentang', function () {
    return view('landing/tentang');
});

Route::get('/etalase/{id}', function () {
    return  view('landing/detail_product');
});

Route::get('/login', function () {
    return view('auth/login');

});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/forgotpassword', function () {
    return view('auth/forgotpassword');
});



