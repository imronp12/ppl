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

Auth::routes();
Route::get('/login','AuthController@login');

Route::get('/home', 'HomeController@index')->name('home');
//dashboard
Route::get('/dinaspertanian', 'DinaspertanianController@dinaspertanian');
//pelatihan
Route::get('dinaspertanian.pelatihan','PelatihanController@pelatihan');
Route::post('dinaspertanian.pelatihan.create','PelatihanController@create');