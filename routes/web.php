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
Route::get('tour', ['as' => 'tour.guide', 'uses' => 'CheckController@tourguide']);

Route::get('/request', function () {
    return view('request');
});
Auth::routes(['verify' => true]);


Route::group([
    'prefix' => '/',
    'middleware'  => 'verified'
  ],
  function () {


    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('profilepicture', 'ImageController@UploadUserProfilePicture')->name('user.profile.picture.upload');
    Route::post('coverpicture', 'ImageController@UploadUserCoverPicture')->name('user.cover.picture.upload');

    Route::get('chec', ['as' => 'check.check', 'uses' => 'CheckController@check']);

    Route::get('forgetpassword', ['as' => 'forget.pwd', 'uses' => 'CheckController@forget']);
    Route::get('resetpwd', ['as' => 'reset.pwd', 'uses' => 'CheckController@resetpwd']);




    Route::get('mainscreen/{circle_id}', ['as' => 'mainscreen', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '1');
    Route::get('mainscreenfamily/{circle_id}', ['as' => 'mainscreenfamily', 'uses' => 'CheckController@mainscreenfamily'])->where('circle_id', '2');
    Route::get('mainscreenbusiness/{circle_id}', ['as' => 'mainscreenbusiness', 'uses' => 'CheckController@mainscreenbusiness'])->where('circle_id', '3');

    Route::get('mainsettings/{circle_id}', ['as' => 'main.settings', 'uses' => 'CheckController@mainsettings'])->where('circle_id', '1');
    Route::get('privacysettings/{circle_id}', ['as' => 'privacy.settings', 'uses' => 'CheckController@privacysettings'])->where('circle_id', '1');
    Route::get('changepassword/{circle_id}', ['as' => 'change.password', 'uses' => 'CheckController@changepassword'])->where('circle_id', '1');

    Route::get('notification/{circle_id}', ['as' => 'notification', 'uses' => 'CheckController@notification']);

    Route::get('/search/{circle_id}', ['as' => 'search', 'uses' => 'CheckController@search']);
    Route::post('/search/{circle_id}', ['as' => 'search', 'uses' => 'CheckController@hello']);

    Route::get('sweetalertcheck', ['as' => 'sweetalertcheck', 'uses' => 'CheckController@sweetalertcheck']);

    Route::post('createcircle', 'CircleController@CreateNewCircleProfile')->name('user.create.circle');

    Route::get('addnewcircle/{circle_id}', ['as' => 'circle.new', 'uses' => 'CheckController@addnewcircle'])->where('circle_id', '[0-9]+');


    Route::post('createpost/{circle_id}', ['as' => 'createpost', 'uses' => 'PostController@createPost'])->where('circle_id', '[0-9]+');

    Route::post('sendmessage/{circle_id}', ['as' => 'sendmessage', 'uses' => 'MessageController@sendMessage'])->where('circle_id', '[0-9]+');


    Route::group([
        'prefix' => '/',
        'where'  => [
          'id' => '[0-9]+'
        ]
      ],
      function () {
        Route::get('/requestsent/{id}', ['as' => 'request.sent', 'uses' => 'CheckController@sentRequest']);
        Route::get('/cancelrequest/{id}/{sender_id}', ['as' => 'cancel.request', 'uses' => 'CheckController@cancelRequest']);
        Route::get('/acceptrequest/{id}/{sender_id}', ['as' => 'accept.request', 'uses' => 'CheckController@acceptRequest'])->where('sender_id', '[0-9]+');
        Route::get('/unfriend/{id}/{sender_id}', ['as' => 'unfriend', 'uses' => 'CheckController@unfriend'])->where('sender_id', '[0-9]+');



        Route::get('/requestsentbusiness/{id}', ['as' => 'request.sent.b', 'uses' => 'BusinessController@sentRequest']);
        Route::get('/cancelrequestbusiness/{id}/{sender_id}', ['as' => 'cancel.request.b', 'uses' => 'BusinessController@cancelRequest'])->where('sender_id', '[0-9]+');
        Route::get('/acceptrequestbusiness/{id}/{sender_id}', ['as' => 'accept.request.b', 'uses' => 'BusinessController@acceptRequest'])->where('sender_id', '[0-9]+');
        Route::get('/disconnect/{id}/{sender_id}', ['as' => 'unfriend.b', 'uses' => 'BusinessController@disconnect'])->where('sender_id', '[0-9]+');



        Route::get('activityfriends/{circle_id}', ['as' => 'activityfriends', 'uses' => 'CheckController@activityfriends'])->where('circle_id', '[0-9]+');
        Route::get('activityfamily/{circle_id}', ['as' => 'activityfamily', 'uses' => 'CheckController@activityfamily'])->where('circle_id', '[0-9]+');
        Route::get('activitybusiness/{circle_id}', ['as' => 'activitybusiness', 'uses' => 'CheckController@activitybusiness'])->where('circle_id', '[0-9]+');

        Route::get('activity/{circle_id}', ['as' => 'allactivities', 'uses' => 'CheckController@allactivities'])->where('circle_id', '[0-9]+');

        Route::get('messagefriends/{circle_id}', ['as' => 'messagefriends', 'uses' => 'CheckController@messagefriends'])->where('circle_id', '1');

        Route::get('message/{id}/{circle_id}', ['as' => 'message', 'uses' => 'MessageController@indmessage'])->where('circle_id', '[0-9]+');

        Route::get('messagefamily/{circle_id}', ['as' => 'messagefamily', 'uses' => 'CheckController@messagefamily'])->where('circle_id', '2');
        Route::get('messagebusiness/{circle_id}', ['as' => 'messagebusiness', 'uses' => 'CheckController@messagebusiness'])->where('circle_id', '3');
        // Route::get('inbox/{circle_id}', ['as' => 'inbox', 'uses' => 'CheckController@inbox'])->where('circle_id', '3');

        Route::get('nearbyfriends/{circle_id}', ['as' => 'nearbyfriends', 'uses' => 'CheckController@nearbyfriends']);
        Route::get('nearbyfamily/{circle_id}', ['as' => 'nearbyfamily', 'uses' => 'CheckController@nearbyfamily']);
        Route::get('nearbyconnections/{circle_id}', ['as' => 'nearbyconnections', 'uses' => 'CheckController@nearbyconnections']);


        Route::post('editinfofriends/{id}/{circle_id}', ['as' => 'editinfofriendspost', 'uses' => 'ProfileController@editprofilefriends'])->where('circle_id', '[0-9]+');
        Route::post('editinfofamily/{id}/{circle_id}', ['as' => 'editinfofamilypost', 'uses' => 'ProfileController@editprofilefamily'])->where('circle_id', '[0-9]+');
        Route::post('editinfobusiness/{id}/{circle_id}', ['as' => 'editinfobusinesspost', 'uses' => 'ProfileController@editprofilebusiness'])->where('circle_id', '[0-9]+');

        Route::post('addintofamily/{id}/{circle_id}', ['as' => 'add.into.family', 'uses' => 'FamilyController@addintofamily'])->where('circle_id', '[0-9]+');
        Route::get('/cancelrequestfamily/{id}/{sender_id}', ['as' => 'cancel.request.f', 'uses' => 'FamilyController@cancelRequest'])->where('sender_id', '[0-9]+');
        Route::get('/acceptrequestfamily/{id}/{sender_id}', ['as' => 'accept.request.f', 'uses' => 'FamilyController@acceptRequest'])->where('sender_id', '[0-9]+');
        Route::get('/removefromfamily/{id}/{sender_id}', ['as' => 'remove.f', 'uses' => 'FamilyController@remove'])->where('sender_id', '[0-9]+');

    });

        Route::get('editinfofriends/{circle_id}', ['as' => 'editinfofriends', 'uses' => 'CheckController@editinfofriends'])->where('circle_id', '1');
        Route::get('editinfofamily/{circle_id}', ['as' => 'editinfofamily', 'uses' => 'CheckController@editinfofamily'])->where('circle_id', '2');
        Route::get('editinfobusiness/{circle_id}', ['as' => 'editinfobusiness', 'uses' => 'CheckController@editinfobusiness'])->where('circle_id', '3');



    Route::group([
        'prefix' => '/',
        'where'  => [
          'id' => '[0-9]+',
          'circle_id' => '1'
        ]
      ],
      function () {
        //Acha Tarika
        Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile', 'uses' => 'CheckController@viewprofile']);
        Route::get('viewphotos/{id}/{circle_id}', ['as' => 'viewphotos', 'uses' => 'CheckController@viewphotos']);
        Route::get('viewvideos/{id}/{circle_id}', ['as' => 'viewvideos', 'uses' => 'CheckController@viewvideos']);
        Route::get('viewfriends/{id}/{circle_id}', ['as' => 'viewfriends', 'uses' => 'CheckController@viewfriends']);
        Route::get('viewabout/{id}/{circle_id}', ['as' => 'viewabout', 'uses' => 'CheckController@viewabout']);
    });


    Route::group([
        'prefix' => '/',
        'where'  => [
          'id' => '[0-9]+',
          'circle_id' => '2'
        ]
      ],
      function () {
        Route::get('viewprofilefamily/{id}/{circle_id}', ['as' => 'viewprofilefamily', 'uses' => 'CheckController@viewprofilefamily']);
        Route::get('viewphotosfamily/{id}/{circle_id}', ['as' => 'viewphotosfamily', 'uses' => 'CheckController@viewphotosfamily']);
        Route::get('viewvideosfamily/{id}/{circle_id}', ['as' => 'viewvideosfamily', 'uses' => 'CheckController@viewvideosfamily']);
        Route::get('viewfamily/{id}/{circle_id}', ['as' => 'viewfamily', 'uses' => 'CheckController@viewfamily']);
        Route::get('viewaboutfamily/{id}/{circle_id}', ['as' => 'viewaboutfamily', 'uses' => 'CheckController@viewaboutfamily']);
    });





    Route::group([
        'prefix' => '/',
        'where'  => [
          'id' => '[0-9]+',
          'circle_id' => '3'
        ]
      ],
      function () {
        Route::get('viewprofilebusiness/{id}/{circle_id}', ['as' => 'viewprofilebusiness', 'uses' => 'CheckController@viewprofilebusiness']);
        Route::get('viewphotosbusiness/{id}/{circle_id}', ['as' => 'viewphotosbusiness', 'uses' => 'CheckController@viewphotosbusiness']);
        Route::get('viewvideosbusiness/{id}/{circle_id}', ['as' => 'viewvideosbusiness', 'uses' => 'CheckController@viewvideosbusiness']);
        Route::get('viewbusiness/{id}/{circle_id}', ['as' => 'viewbusiness', 'uses' => 'CheckController@viewbusiness']);
        Route::get('viewaboutbusiness/{id}/{circle_id}', ['as' => 'viewaboutbusiness', 'uses' => 'CheckController@viewaboutbusiness']);
    });








    //Route::get('image-upload', 'CheckController@imageUpload')->name('image.upload');





    //Route::get('/home', 'HomeController@index')->name('home');

    //Route::get('login', ['as' => 'login.user', 'uses' => 'CheckController@login']);
    //Route::get('/', ['as' => 'login.user', 'uses' => 'CheckController@login']);



    // Route::get('mainscreen/{circle_id}', ['as' => 'check.check.friend', 'uses' => 'CheckController@mainscreen'])->where('circle_id', '[0-9]+');



    // Route::get('viewprofile/{id}/{circle_id}', ['as' => 'viewprofile.profile.friend', 'uses' => 'CheckController@viewprofile'])->where('id', '[0-9]+')->where('circle_id', '[0-9]+');



















});


// Route::get('/requestsent/{id}', function () {
//     event(new App\Events\MyEvent(id));
//     alert()->success('Request Sent Successfully.','You have successfully sent rquest to friend Circle.')->position('top-end')->toToast()->width('24rem');
//     return Redirect::back();
// });




// Route::redirect('/{any}', '/', 301);

// Route::any('/{any}', function () {
//     return redirect()->url('/');
// });


// Route::get('/{any}', ['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);

// Route::fallback(['as' => 'default.page', 'uses' => 'CheckController@defaultPage']);



