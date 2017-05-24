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
    return view('index');
});

Route::get('/about/company','AboutController@index')->name('company');

Route::get('/about/team','AboutController@team')->name('team');

Route::get('/about/history','AboutController@history')->name('history');