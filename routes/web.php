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
    return view('index');
});

Route::get('/api/supplier/{id?}','SupplierController@index');
Route::post('/api/supplier','SupplierController@store');
Route::post('/api/supplier/{id?}','SupplierController@update');
Route::delete('/api/supplier/{id?}','SupplierController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/film','MovieController@index');
Route::get('/lihat/{id?}','MovieController@lihat');