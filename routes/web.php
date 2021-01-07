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
//==========================================================
Route::post('/invoice', function () {
    return view('checkout/invoice');
}); //User
Route::get('/konfirmasi', function () {
    return view('checkout/konfirmasi');
}); //User
Route::get('/transaksi', function () {
    return view('admin/transaksi');
}); //Admin
Route::get('/transaksi/edit/{id}', function () {
    return view('admin/editstatus');
}); //Admin
Route::get('/transaction/{id}', function () {
    return view('admin/detail');
}); //Admin
Route::get('/transaksiuser', function () {
    return view('landing/transaksiuser');
}); //User
Route::get('/transaksi/{id}', function () {
    return view('landing/detailtransaksi');
}); //User
//===========================================================

Route::get('/', 'AuthController@login');
Route::post('/login', 'AuthController@login_process');


Route::group(['middleware' => 'isNotLogin'], function () {
    Route::get('/login', 'AuthController@login');
    Route::post('/login', 'AuthController@login_process');
    Route::get('/register', 'AuthController@register');
    Route::post('/register', 'AuthController@register_process');
    Route::get('/forgot', 'AuthController@forgotpassword');
});

Route::group(['middleware' => 'login'], function () {
    Route::get('/logout', 'AuthController@logout');
    Route::get('/blocked', 'AuthController@blocked');

    Route::get('/cart', 'CartController@list');
    Route::post('/cart', 'CartController@add');
    Route::delete('/cart', 'CartController@remove');

    Route::get('/checkout', 'CheckoutController@checkout');


    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/dashboard', function () {
            return view('admin/dashboard');
        });
        Route::get('/drug', 'DrugController@index');
        Route::get('/drug/insert', 'DrugController@create');
        Route::post('/drug/insert', 'DrugController@store');
        Route::get('/drug/edit/{id}', 'DrugController@edit');
        Route::patch('/drug/edit/{id}', 'DrugController@update');
        Route::delete('/drug/{id}', 'DrugController@destroy');

        Route::get('/delivery', 'DeliveryController@index');
        Route::get('/delivery/insert', 'DeliveryController@insert');
        Route::post('/delivery/insert', 'DeliveryController@store');
        Route::get('/delivery/edit/{id}', 'DeliveryController@edit');
        Route::patch('/delivery/edit/{id}', 'DeliveryController@update');
        Route::delete('/delivery/{id}', 'DeliveryController@destroy');
    });
});

Route::get('/test', function () {
    return view('test');
});
