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
Auth::routes();
Route::namespace ('Auth')->group(function () {
    // Controllers Within The "App\Http\Controllers\Auth" Namespace
    Route::get('/login', 'LoginController@getLogin')->middleware('guest');
    Route::post('/login', 'LoginController@postLogin')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::name('admin')->middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', 'HomeController@index')->name('home');
});
Route::name('kab_kota')->middleware('auth:kab_kota')->group(function () {
    Route::get('/kab_kota/dashboard', 'HomeController@index')->name('home');
    Route::get('/user/pajak-kab-kota/perda', 'kab\PerdaController@index')->name('user.kab_kota.perda');
    Route::get('/user/pajak-kab-kota/perda/create', 'kab\PerdaController@create')->name('user.kab_kota.create');
    Route::get('/pajak/detail', 'kab\PerdaController@pajak_detail')->name('pajak.detail');

});
Route::name('provinsi')->middleware('auth:provinsi')->group(function () {
    Route::get('/provinsi/dashboard', 'HomeController@index')->name('home');
    Route::get('/user/pajak-provinsi/perda', 'PerdaController@index')->name('user.pajak_prov.perda');
    Route::get('/user/pajak-provinsi/raperda', 'RaperdaController@index')->name('user.pajak_prov.raperda');

});

Route::get('/dashboard', 'HomeController@index')->name('home');
