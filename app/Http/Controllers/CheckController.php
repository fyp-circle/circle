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

        return view("main.mainscreen")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function mainscreenfamily(){
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

        return view("main.mainscreenfamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function mainscreenbusiness(){
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

        return view("main.mainscreenbusiness")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function viewprofile(){
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
        return view("profileviews.viewprofile")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewphotos(){
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
        return view("profileviews.viewphotos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewvideos(){
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
        return view("profileviews.viewvideos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewfriends(){
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
        return view("profileviews.viewfriends")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewabout(){
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
        return view("profileviews.viewabout")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function viewprofilefamily(){
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
        return view("profileviewsfamily.viewprofile")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewphotosfamily(){
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
        return view("profileviewsfamily.viewphotos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewvideosfamily(){
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
        return view("profileviewsfamily.viewvideos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewfamily(){
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
        return view("profileviewsfamily.viewfamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewaboutfamily(){
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
        return view("profileviewsfamily.viewabout")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function viewprofilebusiness(){
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
        return view("profileviewsbusiness.viewprofile")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewphotosbusiness(){
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
        return view("profileviewsbusiness.viewphotos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewvideosbusiness(){
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
        return view("profileviewsbusiness.viewvideos")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewbusiness(){
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
        return view("profileviewsbusiness.viewbusiness")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function viewaboutbusiness(){
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
        return view("profileviewsbusiness.viewabout")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function addnewcircle(){
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
        return view("addnewcircle")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function editinfofriends(){
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
        return view("editinfo.editinfofriends")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function editinfofamily(){
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
        return view("editinfo.editinfofamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function editinfobusiness(){
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
        return view("editinfo.editinfobusiness")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function mainsettings(){
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
        return view("accountsettings.mainsettings")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function privacysettings(){
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
        return view("accountsettings.privacysettings")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function changepassword(){
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
        return view("accountsettings.changepassword")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function activityfriends(){
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
        return view("activitylog.activityfriends")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function activityfamily(){
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
        return view("activitylog.activityfamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function activitybusiness(){
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
        return view("activitylog.activitybusiness")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }

    public function messagefriends(){
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
        return view("messages.messagefriends")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function messagefamily(){
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
        return view("messages.messagefamily")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
    }
    public function inbox(){
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
        return view("messages.inbox")->with('has_fam', $has_fam)->with('has_bus', $has_bus);
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
        alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
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
