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
    return view('auth.login');
});

Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');




//dinaspertanian
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dinaspertanian', 'DinaspertanianController@dinaspertanian');
Route::get('dinaspertanian/pelatihan','PelatihanController@index');
Route::post('/pelatihan/create','PelatihanController@create');
Route::get('dinaspertanian/pelatihan/{id}/editpelatihan','PelatihanController@edit');
Route::post('dinaspertanian/pelatihan/{id}/updatepelatihan','PelatihanController@update');

Route::get('dinaspertanian/kelompoktani','KelompoktaniController@index');
Route::get('dinaspertanian/hasilpanen','HasilpanenController@index');
Route::get('dinaspertanian/bantuan','BantuanController@index');
Route::get('dinaspertanian/tabungan','TabunganController@index');
