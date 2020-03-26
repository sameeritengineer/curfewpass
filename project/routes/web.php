<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','CurfewController@index');
Route::post('/curfew','CurfewController@store')->name('curfewpass');