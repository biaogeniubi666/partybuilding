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
// phpinfo测试页面
Route::get('/phpinfo', 'PagessController@phpinfo')->name('phpinfo');

//主页
Route::get('/', 'PagessController@index')->name('index');

// 灯光控制和模拟展示

Route::get('/ledonoff', 'LedsController@update')->name('led.update');
Route::get('/ledshow', 'LedsController@show')->name('led.show');
Route::get('/socketphp', 'LedsController@socketphp')->name('led.socketphp');
Route::get('/socketpython', 'LedsController@socketpython')->name('led.socketpython');
// Route::post('/ledonff', 'LedsController@update')->name('led.update');

Route::get('/airdatashow','AirshowController@airdata')->name('airdata');
Route::resource('airs', 'AirsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);