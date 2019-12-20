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


Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

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
Route::get('viewabout', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewabout']);

Route::get('viewprofilefamily', ['as' => 'viewprofile.profile', 'uses' => 'CheckController@viewprofilefamily']);
Route::get('viewphotosfamily', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotosfamily']);
Route::get('viewvideosfamily', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideosfamily']);
Route::get('viewfamily', ['as' => 'viewfamily.family', 'uses' => 'CheckController@viewfamily']);
Route::get('viewaboutfamily', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewaboutfamily']);

Route::get('viewprofilebusiness', ['as' => 'viewprofile.profile', 'uses' => 'CheckController@viewprofilebusiness']);
Route::get('viewphotosbusiness', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotosbusiness']);
Route::get('viewvideosbusiness', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideosbusiness']);
Route::get('viewbusiness', ['as' => 'viewfamily.family', 'uses' => 'CheckController@viewbusiness']);
Route::get('viewaboutbusiness', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewaboutbusiness']);

Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck']);





