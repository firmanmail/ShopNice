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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend'], function(){
    Route::get('index', 'SuplierController@index')->name('backend.welcome');
});
Route::group(['prefix' => 'barang'], function(){
    Route::get('index', 'MasukController@index')->name('backend.barang.index');
});
Route::group(['prefix' => 'pesanan'], function(){
    Route::get('index', 'PesananController@index')->name('backend.pesanan.index');
});