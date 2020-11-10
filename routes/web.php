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

