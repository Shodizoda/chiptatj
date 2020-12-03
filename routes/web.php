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

Route::resource('autobusho', 'AutobushoController')->name('/', 'autobusho');
Route::resource('chiptaho', 'ChiptahoController');
Route::resource('khatsayrho', 'KhatsayrhoController');
Route::resource('noziron', 'NozironController');
Route::resource('ronandagon', 'RonandagonController');
Route::resource('tashkilot', 'TashkilotController');
Route::resource('chipta_status', 'ChiptaStatusController');

