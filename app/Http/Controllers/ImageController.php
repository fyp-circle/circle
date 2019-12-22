<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ImageController extends Controller
{
    public function UploadUserProfilePicture(Request $request){

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/users/Friend/Profile_Pictures'), $imageName);
        $user = User::find(Auth::user()->user_id);
        $user->profile_picture = 'images/users/Friend/Profile_Pictures/'.$imageName;
        $user->save();

        return back()

            ->with('success','You have successfully Upload Profile Picture.')

            ->with('image',$imageName);



    }

    public function UploadUserCoverPicture(Request $request){

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/users/Cover_Pictures'), $imageName);
        $user = User::find(Auth::user()->user_id);
        $user->cover_picture = 'images/users/Friend/Cover_Pictures/'.$imageName;
        $user->save();

        return back()

            ->with('success','You have successfully Upload Cover Image.')

            ->with('image',$imageName);



    }

}
