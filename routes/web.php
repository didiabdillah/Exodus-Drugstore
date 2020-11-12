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

Route::get('/cart', 'CartController@list');
Route::post('/cart', 'CartController@add');

Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@login_process');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@register_process');
Route::get('/forgot', 'AuthController@forgotpassword');
Route::get('/logout', 'AuthController@logout');
Route::get('/blocked', 'AuthController@blocked');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/drug', 'DrugController@index');
Route::get('/drug/insert', 'DrugController@create');
Route::post('/drug/insert', 'DrugController@store');
Route::get('/drug/edit/{id}', 'DrugController@edit');
Route::patch('/drug/edit/{id}', 'DrugController@update');
Route::delete('/drug/{id}', 'DrugController@destroy');


Route::get('/test', function () {
    return view('test');
});
