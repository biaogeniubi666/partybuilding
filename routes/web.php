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

Route::get('/', 'PagessController@index')->name('index');

Route::get('/ledonoff', 'LedsController@update')->name('led.update');

Route::get('/ledshow', 'LedsController@show')->name('led.show');

// Route::post('/ledonff', 'LedsController@update')->name('led.update');