<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\FamilyUser;
use App\BusinessUser;
use Auth;

class ProfileController extends Controller
{
    public function editprofilefriends(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'gender' => ['required'],
            'day' =>['required'],
            'month' =>['required'],
            'year' =>['required'],
            'about_me' =>['required'],
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'dp' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        if($request->hasFile('dp'))
        {

        $dpName = time().'.'.$request->dp->extension();
        $request->dp->move(public_path('images/users/Friend/Profile_Pictures'), $dpName);

        }
        if($request->hasFile('cover'))
        {
            $coverName = time().'.'.$request->cover->extension();
            $request->cover->move(public_path('images/users/Friend/Cover_Pictures'), $coverName);

        }



        $user = User::find(Auth::user()->user_id);
        $user->email= $request->email;
        $user->name= $request->name;
        $user->phone= $request->phone;
        $user->country= $request->country;
        $user->city= $request->city;
        $user->gender= $request->gender;
        $user->about_me= $request->about_me;
        $user->day = $request->day;
        $user->month = $request->month;
        $user->year = $request->year;
        if($request->hasFile('dp'))
        {
            $user->profile_picture = 'images/users/Friend/Profile_Pictures/'.$dpName;

        }
        if($request->hasFile('cover'))
        {
            $user->cover_picture = 'images/users/Friend/Cover_Pictures/'.$coverName;

        }
        alert()->success('Profile Updated','You have successfully Updated your Profile.')->position('top-end')->toToast()->width('24rem');

        $user->save();

        return redirect()->route('viewprofile.profile.friend');


    }


    public function editprofilefamily(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'about_me' =>['required'],
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'dp' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        if($request->hasFile('dp'))
        {

        $dpName = time().'.'.$request->dp->extension();
        $request->dp->move(public_path('images/users/Family/Profile_Pictures'), $dpName);

        }
        if($request->hasFile('cover'))
        {
            $coverName = time().'.'.$request->cover->extension();
            $request->cover->move(public_path('images/users/Family/Cover_Pictures'), $coverName);

        }



        $f_user = FamilyUser::find(Auth::user()->family_user['family_user_id']);
        $f_user->email= $request->email;
        $f_user->name= $request->name;
        $f_user->phone= $request->phone;
        $f_user->about_me= $request->about_me;
        if($request->hasFile('dp'))
        {
            $f_user->profile_picture = 'images/users/Family/Profile_Pictures/'.$dpName;

        }
        if($request->hasFile('cover'))
        {
            $f_user->cover_picture = 'images/users/Family/Cover_Pictures/'.$coverName;

        }
        alert()->success('Family Profile Updated','You have successfully Updated your Family Profile.')->position('top-end')->toToast()->width('24rem');

        $f_user->save();

        return redirect()->route('viewprofile.profile.family');


    }

    public function editprofilebusiness(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'about_me' =>['required'],
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'dp' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        if($request->hasFile('dp'))
        {

        $dpName = time().'.'.$request->dp->extension();
        $request->dp->move(public_path('images/users/Business/Profile_Pictures'), $dpName);

        }
        if($request->hasFile('cover'))
        {
            $coverName = time().'.'.$request->cover->extension();
            $request->cover->move(public_path('images/users/Business/Cover_Pictures'), $coverName);

        }



        $b_user = BusinessUser::find(Auth::user()->business_user['business_user_id']);
        $b_user->email= $request->email;
        $b_user->name= $request->name;
        $b_user->phone= $request->phone;
        $b_user->about_me= $request->about_me;
        if($request->hasFile('dp'))
        {
            $b_user->profile_picture = 'images/users/Business/Profile_Pictures/'.$dpName;

        }
        if($request->hasFile('cover'))
        {
            $b_user->cover_picture = 'images/users/Business/Cover_Pictures/'.$coverName;

        }
        alert()->success('Business Profile Updated','You have successfully Updated your Business Profile.')->position('top-end')->toToast()->width('24rem');

        $b_user->save();

        return redirect()->route('viewprofile.profile.business');


    }
}
