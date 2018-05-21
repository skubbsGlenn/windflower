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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/invoice', 'InvoiceController@index');
Route::get('/delivery', 'DeliveryController@index');
Route::get('/customers', 'CustomersController@index');
Route::get('/settings', 'SettingsController@index');
