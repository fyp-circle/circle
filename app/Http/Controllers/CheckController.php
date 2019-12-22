<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;
Use Alert;
use Auth;


class CheckController extends Controller
{


    public function check()
    {
        // $posts = User::find(1)->posts;
        // return $posts;

        // $post = Post::find(1);

        // return $post->user->name;


        //Relation between user1 and connection

        // $a = User::find(1)->connections1;
        // return $a;

        // $b = Connection::find(1);
        // return $b->user1->name;


        //Relation between user2 and connection

        // $c = User::find(1)->connections2;
        // return $c;

        // $d = Connection::find(1);
        // return $d->user2->name;


        //Relation between circle and connection

        // $connections = Circle::find(2)->connections;
        // return $connections;

        // $connection = Connection::find(2);

        // return $connection->circle->name;
    }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function login(){
        return view("landing");
    }
    public function forget(){
        return view("forgotpwd");
    }
    public function resetpwd(){
        return view("resetpwd");
    }
    public function mainscreen(){

        return view("main.mainscreen");
    }
    public function mainscreenfamily(){

        return view("main.mainscreenfamily");
    }
    public function mainscreenbusiness(){


        return view("main.mainscreenbusiness");
    }

    public function viewprofile(){

        return view("profileviews.viewprofile");
    }
    public function viewphotos(){

        return view("profileviews.viewphotos");
    }
    public function viewvideos(){

        return view("profileviews.viewvideos");
    }
    public function viewfriends(){

        return view("profileviews.viewfriends");
    }
    public function viewabout(){

        return view("profileviews.viewabout");
    }

    public function viewprofilefamily(){

        return view("profileviewsfamily.viewprofile");
    }
    public function viewphotosfamily(){

        return view("profileviewsfamily.viewphotos");
    }
    public function viewvideosfamily(){

        return view("profileviewsfamily.viewvideos");
    }
    public function viewfamily(){

        return view("profileviewsfamily.viewfamily");
    }
    public function viewaboutfamily(){

        return view("profileviewsfamily.viewabout");
    }

    public function viewprofilebusiness(){

        return view("profileviewsbusiness.viewprofile");
    }
    public function viewphotosbusiness(){

        return view("profileviewsbusiness.viewphotos");
    }
    public function viewvideosbusiness(){

        return view("profileviewsbusiness.viewvideos");
    }
    public function viewbusiness(){

        return view("profileviewsbusiness.viewbusiness");
    }
    public function viewaboutbusiness(){

        return view("profileviewsbusiness.viewabout");
    }

    public function addnewcircle(){

        return view("addnewcircle");
    }

    public function editinfofriends(){

        return view("editinfo.editinfofriends");
    }
    public function editinfofamily(){

        return view("editinfo.editinfofamily");
    }
    public function editinfobusiness(){

        return view("editinfo.editinfobusiness");
    }

    public function mainsettings(){

        return view("accountsettings.mainsettings");
    }
    public function privacysettings(){

        return view("accountsettings.privacysettings");
    }
    public function changepassword(){

        return view("accountsettings.changepassword");
    }

    public function activityfriends(){

        return view("activitylog.activityfriends");
    }
    public function activityfamily(){

        return view("activitylog.activityfamily");
    }
    public function activitybusiness(){

        return view("activitylog.activitybusiness");
    }

    public function messagefriends(){

        return view("messages.messagefriends");
    }
    public function messagefamily(){

        return view("messages.messagefamily");
    }
    public function inbox(){

        return view("messages.inbox");
    }

    public function nearbyfriends(){
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("nearby.nearbyfriends")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function nearbyfamily(){
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("nearby.nearbyfamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function nearbyconnections(){
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("nearby.nearbyconnections")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function notification(){
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("notification")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function search(){
        $user = User::find(Auth::user()->user_id);
        $has_bus=false;
        $has_fam=false;
        if ($user->business_user_id!=null) {
            $has_bus=true;
        } else {
            if ($user->family_user_id!=null) {
                $has_fam=true;
            }
        }
        return view("search")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }


    public function sweetalertcheck(){
        alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->position('top-end')->toToast()->width('24rem')->padding('1.25rem')->showCancelButton()->showConfirmButton()->focusConfirm(true);
        //alert()->info('InfoAlert','Lorem ipsum dolor sit amet.');
        //Alert::warning('Warning Title', 'Warning Message');


        // Link =  "https://realrashid.github.io/sweet-alert/"

        //This link contains usage of alerts and toaster for more info call this function for demo.


        //toast('Your Post as been submited!','success');

        // alert()->question('Are you sure?','You won\'t be able to revert this!')
        // ->showConfirmButton('Yes! Delete it', '#3085d6')
        // ->showCancelButton('Cancel', '#aaa')->reverseButtons();

        // alert()->error('Oops...', 'Something went wrong!')->footer('<a href="#">Why do I have this issue?</a>');

        // alert()->info('InfoAlert','Lorem ipsum dolor sit amet.')
        // ->animation('tada faster','fadeInUp faster');
        return view("main.mainscreen");
    }
}
