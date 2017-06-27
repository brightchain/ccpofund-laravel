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

//关于传承栏目
Route::get('/about/company','AboutController@index')->name('company');

Route::get('/about/core','AboutController@core')->name('core');

Route::get('/about/culture','AboutController@culture')->name('culture');

Route::get('/about/team','AboutController@team')->name('team');

Route::get('/about/history','AboutController@history')->name('history');

//基金管理栏目
Route::get('/funds','FundsController@index')->name('funds');

Route::get('/funds/product/{id}','FundsController@product')->name('product');

Route::get('/funds/issues','FundsController@issues')->name('issues');

//投资运营栏目
Route::get('/invests/cases','InvestsController@cases')->name('cases');

Route::get('/invests/real','InvestsController@real')->name('real');

Route::get('/invests/asset','InvestsController@asset')->name('asset');

Route::get('/invests/show/{id}','InvestsController@show')->name('invest');

Route::get('/invests/property','InvestsController@property')->name('property');

Route::get('/invests/urban','InvestsController@urban')->name('urban');

//社会责任栏目
Route::get('/socials','SocialsController@index')->name('socials');

Route::get('/socials/{id}','SocialsController@show');

//新闻中心
Route::get('/news/chuan','NewsController@chuan')->name('inheritance');

Route::get('/news/show/{id}','NewsController@show')->name('show');

Route::get('/news/industry','NewsController@industry')->name('industry');

Route::get('/news/industry/{id}','NewsController@industryshow');

//联系我们
Route::get('/contact/us','ContactController@index')->name('contactus');

Route::get('/contact/recruit','ContactController@recruit')->name('recruit');

Route::any('uploads', 'TestController@uploadImages');