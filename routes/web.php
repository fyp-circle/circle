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


Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

//Route::get('image-upload', 'CheckController@imageUpload')->name('image.upload');

Route::post('profilepicture', 'ImageController@UploadUserProfilePicture')->name('user.profile.picture.upload');
Route::post('coverpicture', 'ImageController@UploadUserCoverPicture')->name('user.cover.picture.upload');

Route::post('editinfofriends/{id}', ['as' => 'circle.new', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+');
Route::post('editinfofamily', 'ProfileController@editprofilefamily')->name('user.profile.edit.family');
Route::post('editinfobusiness', 'ProfileController@editprofilebusiness')->name('user.profile.edit.business');

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('login', ['as' => 'login.user', 'uses' => 'CheckController@login']);
//Route::get('/', ['as' => 'login.user', 'uses' => 'CheckController@login']);
Route::get('forgetpassword', ['as' => 'forget.pwd', 'uses' => 'CheckController@forget']);
Route::get('resetpwd', ['as' => 'reset.pwd', 'uses' => 'CheckController@resetpwd']);

Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check']);
Route::get('mainscreen/{id}/{circle_id}', ['as' => 'check.check.friend', 'uses' => 'CheckController@mainscreen'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('mainscreenfamily', ['as' => 'check.check.family', 'uses' => 'CheckController@mainscreenfamily']);
Route::get('mainscreenbusiness', ['as' => 'check.check.business', 'uses' => 'CheckController@mainscreenbusiness']);

Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile.profile.friend', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');
Route::get('viewphotos/{id}', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotos'])->where('id', '[0-9]+');
Route::get('viewvideos/{id}', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideos'])->where('id', '[0-9]+');
Route::get('viewfriends/{id}', ['as' => 'viewfriends.friends', 'uses' => 'CheckController@viewfriends'])->where('id', '[0-9]+');
Route::get('viewabout/{id}', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewabout'])->where('id', '[0-9]+');

Route::get('viewprofilefamily/{id}', ['as' => 'viewprofile.profile.family', 'uses' => 'CheckController@viewprofilefamily'])->where('id', '[0-9]+');
Route::get('viewphotosfamily/{id}', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotosfamily'])->where('id', '[0-9]+');
Route::get('viewvideosfamily/{id}', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideosfamily'])->where('id', '[0-9]+');
Route::get('viewfamily/{id}', ['as' => 'viewfamily.family', 'uses' => 'CheckController@viewfamily'])->where('id', '[0-9]+');
Route::get('viewaboutfamily/{id}', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewaboutfamily'])->where('id', '[0-9]+');

Route::get('viewprofilebusiness/{id}', ['as' => 'viewprofile.profile.business', 'uses' => 'CheckController@viewprofilebusiness'])->where('id', '[0-9]+');
Route::get('viewphotosbusiness/{id}', ['as' => 'viewphotos.photos', 'uses' => 'CheckController@viewphotosbusiness'])->where('id', '[0-9]+');
Route::get('viewvideosbusiness/{id}', ['as' => 'viewvideos.videos', 'uses' => 'CheckController@viewvideosbusiness'])->where('id', '[0-9]+');
Route::get('viewbusiness/{id}', ['as' => 'viewfamily.family', 'uses' => 'CheckController@viewbusiness'])->where('id', '[0-9]+');
Route::get('viewaboutbusiness/{id}', ['as' => 'viewabout.about', 'uses' => 'CheckController@viewaboutbusiness'])->where('id', '[0-9]+');

Route::get('addnewcircle', ['as' => 'circle.new', 'uses' => 'CheckController@addnewcircle']);

Route::get('editinfofriends/{id}', ['as' => 'circle.new', 'uses' => 'CheckController@editinfofriends'])->where('id', '[0-9]+');
Route::get('editinfofamily', ['as' => 'circle.new', 'uses' => 'CheckController@editinfofamily']);
Route::get('editinfobusiness', ['as' => 'circle.new', 'uses' => 'CheckController@editinfobusiness']);

Route::get('mainsettings', ['as' => 'main.settings', 'uses' => 'CheckController@mainsettings']);
Route::get('privacysettings', ['as' => 'privacy.settings', 'uses' => 'CheckController@privacysettings']);
Route::get('changepassword', ['as' => 'change.password', 'uses' => 'CheckController@changepassword']);

Route::get('activityfriends', ['as' => 'activity.log', 'uses' => 'CheckController@activityfriends']);
Route::get('activityfamily', ['as' => 'activity.log', 'uses' => 'CheckController@activityfamily']);
Route::get('activitybusiness', ['as' => 'activity.log', 'uses' => 'CheckController@activitybusiness']);

Route::get('messagefriends', ['as' => 'messages.friends', 'uses' => 'CheckController@messagefriends']);
Route::get('messagefamily', ['as' => 'messages.family', 'uses' => 'CheckController@messagefamily']);
Route::get('inbox', ['as' => 'inbox.business', 'uses' => 'CheckController@inbox']);

Route::get('nearbyfriends', ['as' => 'messages.friends', 'uses' => 'CheckController@nearbyfriends']);
Route::get('nearbyfamily', ['as' => 'messages.family', 'uses' => 'CheckController@nearbyfamily']);
Route::get('nearbyconnections', ['as' => 'inbox.business', 'uses' => 'CheckController@nearbyconnections']);

Route::get('notification', ['as' => 'notify.notify', 'uses' => 'CheckController@notification']);

Route::get('search', ['as' => 'search.search', 'uses' => 'CheckController@search']);

Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck']);

Route::post('createcircle', 'CircleController@CreateNewCircleProfile')->name('user.create.circle');

// Route::redirect('/{any}', '/', 301);

// Route::any('/{any}', function () {
//     return redirect()->url('/');
// });


// Route::get('/{any}', ['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);




