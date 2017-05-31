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

Route::get('/about/core','AboutController@core')->name('core');

Route::get('/about/culture','AboutController@culture')->name('culture');

Route::get('/about/team','AboutController@team')->name('team');

Route::get('/about/history','AboutController@history')->name('history');

Route::get('/funds','FundsController@index')->name('funds');

Route::get('/funds/issues','FundsController@issues')->name('issues');

Route::get('/invests/cases','InvestsController@cases')->name('cases');

Route::get('/invests/real','InvestsController@real')->name('real');

Route::get('/invests/asset','InvestsController@asset')->name('asset');

Route::get('/invests/show','InvestsController@show')->name('show');

Route::get('/invests/property','InvestsController@property')->name('property');

Route::get('/invests/urban','InvestsController@urban')->name('urban');

Route::get('/socials','SocialsController@index')->name('socials');

Route::get('/socials/{id}','SocialsController@show');



Route::any('uploads', 'TestController@uploadImages');