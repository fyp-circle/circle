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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', ['as' => 'news.feed', 'uses' => 'HomeController@index']);
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('loginn', ['as' => 'login.user', 'uses' => 'CheckController@login']);

Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check']);
Route::get('mainscreen', ['as' => 'check.check', 'uses' => 'CheckController@mainscreen']);






