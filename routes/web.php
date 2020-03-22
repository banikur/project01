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
    return view('template.front.index');
});
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/user/pajak-provinsi/perda', 'PerdaController@index')->name('user.pajak_prov.perda');
Route::get('/user/pajak-provinsi/raperda', 'RaperdaController@index')->name('user.pajak_prov.raperda');

Route::get('/user/pajak-kab-kota/perda', 'kab\PerdaController@index')->name('user.pajak_prov.perda');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
