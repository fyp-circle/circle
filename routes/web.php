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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('login', ['as' => 'login.user', 'uses' => 'CheckController@login']);
//Route::get('/', ['as' => 'login.user', 'uses' => 'CheckController@login']);
Route::get('forgetpassword', ['as' => 'forget.pwd', 'uses' => 'CheckController@forget']);
Route::get('resetpwd', ['as' => 'reset.pwd', 'uses' => 'CheckController@resetpwd']);

Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check']);
Route::get('mainscreen', ['as' => 'check.check', 'uses' => 'CheckController@mainscreen']);
Route::get('mainscreenfamily', ['as' => 'check.check', 'uses' => 'CheckController@mainscreenfamily']);
Route::get('mainscreenbusiness', ['as' => 'check.check', 'uses' => 'CheckController@mainscreenbusiness']);
Route::get('viewprofile', ['as' => 'viewprofile.profile', 'uses' => 'CheckController@viewprofile']);
Route::get('viewphotos', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotos']);
Route::get('viewvideos', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideos']);
Route::get('viewfriends', ['as' => 'viewfriends.friends', 'uses' => 'CheckController@viewfriends']);
Route::get('viewfamily', ['as' => 'viewfamily.family', 'uses' => 'CheckController@viewfamily']);
Route::get('viewbusiness', ['as' => 'viewbusiness.business', 'uses' => 'CheckController@viewbusiness']);
Route::get('viewabout', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewabout']);

Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck']);





