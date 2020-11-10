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

Route::get('/', 'LandingController@index');
Route::get('/etalase', 'LandingController@etalase');
Route::get('/about', 'LandingController@about');
Route::get('/etalase/{id}', 'LandingController@detail');


Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::get('/forgot', 'AuthController@forgotpassword');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/edit_obat', function () {
    return view('admin/edit_obat');
});

Route::get('/insert_obat', function () {
    return view('admin/insert_obat');
});

Route::get('/obat', function () {
    return view('admin/obat');
});
