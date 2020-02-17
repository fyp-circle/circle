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


Route::get('/requestsent/{id}', ['as' => 'request.sent', 'uses' => 'CheckController@sentRequest'])->where('id', '[0-9]+');
Route::get('/cancelrequest/{id}', ['as' => 'cancel.request', 'uses' => 'CheckController@cancelRequest'])->where('id', '[0-9]+');
Route::get('/acceptrequest/{id}', ['as' => 'cancel.request', 'uses' => 'CheckController@acceptRequest'])->where('id', '[0-9]+');

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

//Route::get('image-upload', 'CheckController@imageUpload')->name('image.upload');

Route::post('profilepicture', 'ImageController@UploadUserProfilePicture')->name('user.profile.picture.upload');
Route::post('coverpicture', 'ImageController@UploadUserCoverPicture')->name('user.cover.picture.upload');

Route::post('editinfofriends/{id}', ['as' => 'editinfofriends', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+');
Route::post('editinfofamily/{id}', ['as' => 'editinfofamily', 'uses' => 'CheckController@editinfofamily'])->where('id', '[0-9]+');
Route::post('editinfobusiness/{id}', ['as' => 'editinfobusiness', 'uses' => 'CheckController@editinfobusiness'])->where('id', '[0-9]+');

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('login', ['as' => 'login.user', 'uses' => 'CheckController@login']);
//Route::get('/', ['as' => 'login.user', 'uses' => 'CheckController@login']);
Route::get('forgetpassword', ['as' => 'forget.pwd', 'uses' => 'CheckController@forget']);
Route::get('resetpwd', ['as' => 'reset.pwd', 'uses' => 'CheckController@resetpwd']);

Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check']);
// Route::get('mainscreen/{circle_id}', ['as' => 'check.check.friend', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '[0-9]+');
Route::get('mainscreen/{circle_id}', ['as' => 'mainscreen', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '[0-9]+');
Route::get('mainscreenfamily/{circle_id}', ['as' => 'mainscreenfamily', 'uses' => 'CheckController@mainscreenfamily'])->where('circle_id', '[0-9]+');
Route::get('mainscreenbusiness/{circle_id}', ['as' => 'mainscreenbusiness', 'uses' => 'CheckController@mainscreenbusiness'])->where('circle_id', '[0-9]+');


// Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile.profile.friend', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');


//Acha Tarika
Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewphotos/{id}/{circle_id}', ['as' => 'viewphotos', 'uses' => 'CheckController@viewphotos'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewvideos/{id}/{circle_id}', ['as' => 'viewvideos', 'uses' => 'CheckController@viewvideos'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewfriends/{id}/{circle_id}', ['as' => 'viewfriends', 'uses' => 'CheckController@viewfriends'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewabout/{id}/{circle_id}', ['as' => 'viewabout', 'uses' => 'CheckController@viewabout'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');

Route::get('viewprofilefamily/{id}/{circle_id}', ['as' => 'viewprofilefamily', 'uses' => 'CheckController@viewprofilefamily'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewphotosfamily/{id}/{circle_id}', ['as' => 'viewphotosfamily', 'uses' => 'CheckController@viewphotosfamily'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewvideosfamily/{id}/{circle_id}', ['as' => 'viewvideosfamily', 'uses' => 'CheckController@viewvideosfamily'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewfamily/{id}/{circle_id}', ['as' => 'viewfamily', 'uses' => 'CheckController@viewfamily'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewaboutfamily/{id}/{circle_id}', ['as' => 'viewaboutfamily', 'uses' => 'CheckController@viewaboutfamily'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');

Route::get('viewprofilebusiness/{id}/{circle_id}', ['as' => 'viewprofilebusiness', 'uses' => 'CheckController@viewprofilebusiness'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewphotosbusiness/{id}/{circle_id}', ['as' => 'viewphotosbusiness', 'uses' => 'CheckController@viewphotosbusiness'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewvideosbusiness/{id}/{circle_id}', ['as' => 'viewvideosbusiness', 'uses' => 'CheckController@viewvideosbusiness'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewbusiness/{id}/{circle_id}', ['as' => 'viewbusiness', 'uses' => 'CheckController@viewbusiness'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewaboutbusiness/{id}/{circle_id}', ['as' => 'viewaboutbusiness', 'uses' => 'CheckController@viewaboutbusiness'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');

Route::get('addnewcircle', ['as' => 'circle.new', 'uses' => 'CheckController@addnewcircle']);

Route::get('editinfofriends/{id}', ['as' => 'editinfofriends', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+');
Route::get('editinfofamily/{id}', ['as' => 'editinfofamily', 'uses' => 'CheckController@editinfofamily'])->where('id', '[0-9]+');
Route::get('editinfobusiness/{id}', ['as' => 'editinfobusiness', 'uses' => 'CheckController@editinfobusiness'])->where('id', '[0-9]+');

Route::get('mainsettings', ['as' => 'main.settings', 'uses' => 'CheckController@mainsettings']);
Route::get('privacysettings', ['as' => 'privacy.settings', 'uses' => 'CheckController@privacysettings']);
Route::get('changepassword', ['as' => 'change.password', 'uses' => 'CheckController@changepassword']);

Route::get('activityfriends/{id}', ['as' => 'activityfriends', 'uses' => 'CheckController@activityfriends'])->where('id', '[0-9]+');
Route::get('activityfamily/{id}', ['as' => 'activityfamily', 'uses' => 'CheckController@activityfamily'])->where('id', '[0-9]+');
Route::get('activitybusiness/{id}', ['as' => 'activitybusiness', 'uses' => 'CheckController@activitybusiness'])->where('id', '[0-9]+');

Route::get('messagefriends/{id}', ['as' => 'messagefriends', 'uses' => 'CheckController@messagefriends'])->where('id', '[0-9]+');
Route::get('messagefamily/{id}', ['as' => 'messagefamily', 'uses' => 'CheckController@messagefamily'])->where('id', '[0-9]+');
Route::get('inbox/{id}', ['as' => 'inbox', 'uses' => 'CheckController@inbox'])->where('id', '[0-9]+');

Route::get('nearbyfriends/{id}', ['as' => 'nearbyfriends', 'uses' => 'CheckController@nearbyfriends'])->where('id', '[0-9]+');
Route::get('nearbyfamily/{id}', ['as' => 'nearbyfamily', 'uses' => 'CheckController@nearbyfamily'])->where('id', '[0-9]+');
Route::get('nearbyconnections/{id}', ['as' => 'nearbyconnections', 'uses' => 'CheckController@nearbyconnections'])->where('id', '[0-9]+');

Route::get('notification', ['as' => 'notify.notify', 'uses' => 'CheckController@notification']);

Route::get('search', ['as' => 'search.search', 'uses' => 'CheckController@search']);

Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck']);

Route::post('createcircle', 'CircleController@CreateNewCircleProfile')->name('user.create.circle');

// Route::redirect('/{any}', '/', 301);

// Route::any('/{any}', function () {
//     return redirect()->url('/');
// });


// Route::get('/{any}', ['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);




