<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BusinessUser;
use App\FamilyUser;
use Auth;
use Alert;

class CircleController extends Controller
{
    public function CreateNewCircleProfile(Request $request){
        $request->validate([
            'circle_type' =>['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'about_me' => ['required', 'string','max:255'],

        ]);

        if ($request->circle_type=='Business') {

            $b_user = new BusinessUser;
            $b_user->name = $request->name;
            $b_user->email= $request->email;
            $b_user->phone = $request->phone;
            $b_user->about_me = $request->about_me;
            $b_user->user_id = Auth::user()->user_id;
            $b_user->save();
            $user = Auth::user();
            $user->business_user_id=$b_user->business_user_id;
            $user->save();
            alert()->success('Business Circle Created','You have successfully Created Business Circle.');


        } else {
            if ($request->circle_type=='Family') {

                $f_user = new FamilyUser;
                $f_user->name = $request->name;
                $f_user->email= $request->email;
                $f_user->phone = $request->phone;
                $f_user->about_me = $request->about_me;
                $f_user->user_id = Auth::user()->user_id;
                $f_user->save();
                $user = Auth::user();
                $user->family_user_id=$f_user->family_user_id;
                $user->save();
                alert()->success('Family Circle Created','You have successfully Created Family Circle.');
            } else {
                # code...
            }
        }

        return view("main.mainscreen");
    }
}
