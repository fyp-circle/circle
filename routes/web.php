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


Route::get('/request', function () {
    return view('request');
});


// Route::get('/requestsent/{id}', function () {
//     event(new App\Events\MyEvent(id));
//     alert()->success('Request Sent Successfully.','You have successfully sent rquest to friend Circle.')->position('top-end')->toToast()->width('24rem');
//     return Redirect::back();
// });


Route::get('/requestsent/{id}', ['as' => 'request.sent', 'uses' => 'CheckController@sentRequest'])->where('id', '[0-9]+')->middleware('verified');
Route::get('/cancelrequest/{id}', ['as' => 'cancel.request', 'uses' => 'CheckController@cancelRequest'])->where('id', '[0-9]+')->middleware('verified');
Route::get('/acceptrequest/{id}', ['as' => 'cancel.request', 'uses' => 'CheckController@acceptRequest'])->where('id', '[0-9]+')->middleware('verified');

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

//Route::get('image-upload', 'CheckController@imageUpload')->name('image.upload');

Route::post('profilepicture', 'ImageController@UploadUserProfilePicture')->name('user.profile.picture.upload')->middleware('verified');
Route::post('coverpicture', 'ImageController@UploadUserCoverPicture')->name('user.cover.picture.upload')->middleware('verified');

Route::post('editinfofriends/{id}', ['as' => 'editinfofriends', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+')->middleware('verified');
Route::post('editinfofamily/{id}', ['as' => 'editinfofamily', 'uses' => 'CheckController@editinfofamily'])->where('id', '[0-9]+')->middleware('verified');
Route::post('editinfobusiness/{id}', ['as' => 'editinfobusiness', 'uses' => 'CheckController@editinfobusiness'])->where('id', '[0-9]+')->middleware('verified');

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('login', ['as' => 'login.user', 'uses' => 'CheckController@login']);
//Route::get('/', ['as' => 'login.user', 'uses' => 'CheckController@login']);
Route::get('forgetpassword', ['as' => 'forget.pwd', 'uses' => 'CheckController@forget'])->middleware('verified');
Route::get('resetpwd', ['as' => 'reset.pwd', 'uses' => 'CheckController@resetpwd'])->middleware('verified');

Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check'])->middleware('verified');
// Route::get('mainscreen/{circle_id}', ['as' => 'check.check.friend', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '[0-9]+');
Route::get('mainscreen/{circle_id}', ['as' => 'mainscreen', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '1')->middleware('verified');
Route::get('mainscreenfamily/{circle_id}', ['as' => 'mainscreenfamily', 'uses' => 'CheckController@mainscreenfamily'])->where('circle_id', '2')->middleware('verified');
Route::get('mainscreenbusiness/{circle_id}', ['as' => 'mainscreenbusiness', 'uses' => 'CheckController@mainscreenbusiness'])->where('circle_id', '3')->middleware('verified');


// Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile.profile.friend', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');


//Acha Tarika
Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '1')->middleware('verified');
Route::get('viewphotos/{id}/{circle_id}', ['as' => 'viewphotos', 'uses' => 'CheckController@viewphotos'])->where('id', '[0-9]+')->where('circle_id', '1')->middleware('verified');
Route::get('viewvideos/{id}/{circle_id}', ['as' => 'viewvideos', 'uses' => 'CheckController@viewvideos'])->where('id', '[0-9]+')->where('circle_id', '1')->middleware('verified');
Route::get('viewfriends/{id}/{circle_id}', ['as' => 'viewfriends', 'uses' => 'CheckController@viewfriends'])->where('id', '[0-9]+')->where('circle_id', '1')->middleware('verified');
Route::get('viewabout/{id}/{circle_id}', ['as' => 'viewabout', 'uses' => 'CheckController@viewabout'])->where('id', '[0-9]+')->where('circle_id', '1')->middleware('verified');

Route::get('viewprofilefamily/{id}/{circle_id}', ['as' => 'viewprofilefamily', 'uses' => 'CheckController@viewprofilefamily'])->where('id', '[0-9]+')->where('circle_id', '2')->middleware('verified');
Route::get('viewphotosfamily/{id}/{circle_id}', ['as' => 'viewphotosfamily', 'uses' => 'CheckController@viewphotosfamily'])->where('id', '[0-9]+')->where('circle_id', '2')->middleware('verified');
Route::get('viewvideosfamily/{id}/{circle_id}', ['as' => 'viewvideosfamily', 'uses' => 'CheckController@viewvideosfamily'])->where('id', '[0-9]+')->where('circle_id', '2')->middleware('verified');
Route::get('viewfamily/{id}/{circle_id}', ['as' => 'viewfamily', 'uses' => 'CheckController@viewfamily'])->where('id', '[0-9]+')->where('circle_id', '2')->middleware('verified');
Route::get('viewaboutfamily/{id}/{circle_id}', ['as' => 'viewaboutfamily', 'uses' => 'CheckController@viewaboutfamily'])->where('id', '[0-9]+')->where('circle_id', '2')->middleware('verified');

Route::get('viewprofilebusiness/{id}/{circle_id}', ['as' => 'viewprofilebusiness', 'uses' => 'CheckController@viewprofilebusiness'])->where('id', '[0-9]+')->where('circle_id', '3')->middleware('verified');
Route::get('viewphotosbusiness/{id}/{circle_id}', ['as' => 'viewphotosbusiness', 'uses' => 'CheckController@viewphotosbusiness'])->where('id', '[0-9]+')->where('circle_id', '3')->middleware('verified');
Route::get('viewvideosbusiness/{id}/{circle_id}', ['as' => 'viewvideosbusiness', 'uses' => 'CheckController@viewvideosbusiness'])->where('id', '[0-9]+')->where('circle_id', '3')->middleware('verified');
Route::get('viewbusiness/{id}/{circle_id}', ['as' => 'viewbusiness', 'uses' => 'CheckController@viewbusiness'])->where('id', '[0-9]+')->where('circle_id', '3')->middleware('verified');
Route::get('viewaboutbusiness/{id}/{circle_id}', ['as' => 'viewaboutbusiness', 'uses' => 'CheckController@viewaboutbusiness'])->where('id', '[0-9]+')->where('circle_id', '3')->middleware('verified');

Route::get('addnewcircle/{circle_id}', ['as' => 'circle.new', 'uses' => 'CheckController@addnewcircle'])->where('circle_id', '[0-9]+')->middleware('verified');

Route::get('editinfofriends/{id}', ['as' => 'editinfofriends', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+')->middleware('verified');
Route::get('editinfofamily/{id}', ['as' => 'editinfofamily', 'uses' => 'CheckController@editinfofamily'])->where('id', '[0-9]+')->middleware('verified');
Route::get('editinfobusiness/{id}', ['as' => 'editinfobusiness', 'uses' => 'CheckController@editinfobusiness'])->where('id', '[0-9]+')->middleware('verified');

Route::get('mainsettings/{circle_id}', ['as' => 'main.settings', 'uses' => 'CheckController@mainsettings'])->middleware('verified');
Route::get('privacysettings', ['as' => 'privacy.settings', 'uses' => 'CheckController@privacysettings'])->middleware('verified');
Route::get('changepassword', ['as' => 'change.password', 'uses' => 'CheckController@changepassword'])->middleware('verified');

Route::get('activityfriends/{id}', ['as' => 'activityfriends', 'uses' => 'CheckController@activityfriends'])->where('id', '[0-9]+')->middleware('verified');
Route::get('activityfamily/{id}', ['as' => 'activityfamily', 'uses' => 'CheckController@activityfamily'])->where('id', '[0-9]+')->middleware('verified');
Route::get('activitybusiness/{id}', ['as' => 'activitybusiness', 'uses' => 'CheckController@activitybusiness'])->where('id', '[0-9]+')->middleware('verified');

Route::get('messagefriends/{id}', ['as' => 'messagefriends', 'uses' => 'CheckController@messagefriends'])->where('id', '[0-9]+')->middleware('verified');
Route::get('messagefamily/{id}', ['as' => 'messagefamily', 'uses' => 'CheckController@messagefamily'])->where('id', '[0-9]+')->middleware('verified');
Route::get('inbox/{id}', ['as' => 'inbox', 'uses' => 'CheckController@inbox'])->where('id', '[0-9]+')->middleware('verified')->middleware('verified');

Route::get('nearbyfriends/{id}', ['as' => 'nearbyfriends', 'uses' => 'CheckController@nearbyfriends'])->where('id', '[0-9]+')->middleware('verified');
Route::get('nearbyfamily/{id}', ['as' => 'nearbyfamily', 'uses' => 'CheckController@nearbyfamily'])->where('id', '[0-9]+')->middleware('verified');
Route::get('nearbyconnections/{id}', ['as' => 'nearbyconnections', 'uses' => 'CheckController@nearbyconnections'])->where('id', '[0-9]+')->middleware('verified');

Route::get('notification', ['as' => 'notify.notify', 'uses' => 'CheckController@notification'])->middleware('verified');

Route::get('search', ['as' => 'search.search', 'uses' => 'CheckController@search'])->middleware('verified');

Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck'])->middleware('verified');

Route::post('createcircle', 'CircleController@CreateNewCircleProfile')->name('user.create.circle')->middleware('verified');

// Route::redirect('/{any}', '/', 301);

// Route::any('/{any}', function () {
//     return redirect()->url('/');
// });


// Route::get('/{any}', ['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);

// Route::fallback(['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);




