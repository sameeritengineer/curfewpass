<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','CurfewController@index');
Route::get('show_details/{id}','HomeController@show')->name('show_details');
Route::post('/curfew','CurfewController@store')->name('curfewpass');
Route::post('send_mail','HomeController@send_mail')->name('send_mail');