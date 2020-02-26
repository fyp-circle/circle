<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;
use App\Notif;
use Illuminate\Support\Facades\DB;
Use Alert;
use Auth;
use App\Events\MyEvent;
use App\Events\StalkingEvent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class CheckController extends Controller
{


    public function getNotifications(){
        $n =User::find(Auth::user()->user_id)->notifs()->orderBy('created_at','desc')->take(10)->get();
        return $n;
    }

    public function checkConnection($id,$circle_id){
        $c=0;

        if($id==Auth::user()->user_id){
            $c=2; //means user is auth user means show 'Nothing'
        }
        else{
            $a=DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', $circle_id],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', $circle_id],
            ])
            ->get();

            if (!$a->isEmpty()) {
                if($a[0]->approve==1){
                    $c = 1; //means connection exists means show 'You are already friends Button'
                }
                else{
                    if($a[0]->con_ini==Auth::user()->user_id){
                        $c = 4; //means Auth user has sent request means show 'Request Already Sent'
                    }
                    else{
                        $c=3; //request is pending means show 'Accept request' and 'cancel request' button
                    }

                }

            } else {
                $c = 0;  //means connection do not exists means show 'Add Friend Button'
            }
        }
        return $c;
    }


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
    public function mainscreen($circle_id){
        //$user = User::find($id);
        $id=Auth::user()->user_id;
        $n = CheckController::getNotifications();

        // return $circle_id;
        $c=CheckController::checkConnection($id,$circle_id);
        return view("main.mainscreen")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
    }
    public function mainscreenfamily($circle_id){
        //$user = User::find($id);
        $id=Auth::user()->user_id;
        // return $circle_id;
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($id,$circle_id);
        return view("main.mainscreenfamily")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
    }
    public function mainscreenbusiness($circle_id){
        //$user = User::find($id);
        $id=Auth::user()->user_id;
        // return $circle_id;
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($id,$circle_id);
        return view("main.mainscreenbusiness")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
    }

    public function viewprofile($id, $circle_id){

        $user = User::find($id);
         $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($id,$circle_id);
        if($c!=1 && $c!=2){
            event(new StalkingEvent($circle_id,$id));
        }
        return view("profileviews.viewprofile")->with('notifications',$n)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewphotos($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviews.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewvideos($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviews.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewfriends($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
         $n = CheckController::getNotifications();
        return view("profileviews.viewfriends")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewabout($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviews.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //FAMILY
    public function viewprofilefamily($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsfamily.viewprofile")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewphotosfamily($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsfamily.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewvideosfamily($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsfamily.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewfamily($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsfamily.viewfamily")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewaboutfamily($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsfamily.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //BUSINESS
    public function viewprofilebusiness($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsbusiness.viewprofile")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewphotosbusiness($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsbusiness.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewvideosbusiness($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsbusiness.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewbusiness($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsbusiness.viewbusiness")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function viewaboutbusiness($id, $circle_id){
         $n = CheckController::getNotifications();
        $user = User::find($id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("profileviewsbusiness.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //ADD NEW CIRCLE
    public function addnewcircle($circle_id){
         $n = CheckController::getNotifications();

        return view("addnewcircle")->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //EDIT INFO
    public function editinfofriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("editinfo.editinfofriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function editinfofamily($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("editinfo.editinfofamily")->with('c',$c)->with('user',$user)->with('profile_id',$user->user_id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function editinfobusiness($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("editinfo.editinfobusiness")->with('c',$c)->with('user',$user)->with('profile_id',$user->user_id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //MAIN SETTINGS
    public function mainsettings($circle_id){
         $n = CheckController::getNotifications();

        return view("accountsettings.mainsettings")->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function privacysettings($circle_id){
         $n = CheckController::getNotifications();

        return view("accountsettings.privacysettings")->with('circle_id',$circle_id)->with('notifications',$n);
    }
    public function changepassword($circle_id){
         $n = CheckController::getNotifications();

        return view("accountsettings.changepassword")->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //ACTIIVTY LOG
    public function activityfriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("activitylog.activityfriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function activityfamily($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("activitylog.activityfamily")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function activitybusiness($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("activitylog.activitybusiness")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    //MESSAGE
    public function messagefriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("messages.messagefriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function messagefamily($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("messages.messagefamily")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function inbox($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("messages.inbox")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    //NEARBY
    public function nearbyfriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("nearby.nearbyfriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function nearbyfamily($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("nearby.nearbyfamily")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function nearbyconnections($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("nearby.nearbyconnections")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    //NOTIFICATION
    public function notification(){
        $user = Auth::user();
         $n = CheckController::getNotifications();
         $c=CheckController::checkConnection($user->user_id,1);
        return view("notification")->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    //SEARCH
    // public function search(){
    //     $user = Auth::user();
    //     $n = CheckController::getNotifications();
    //     $c=CheckController::checkConnection($user->user_id);
    //     return view("search")->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    // }
    public function search(){
        $user = Auth::user();
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($user->user_id,1);
        return view('search')->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);

        // $q = Request::get ( 'q' );
        // $n = CheckController::getNotifications();
        // $c=CheckController::checkConnection($user->user_id);
        // $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        // if(count($user) > 0)
        //     return view('search')->withDetails($user)->withQuery ( $q )->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
        // else return view ('search')->withMessage('No Details found. Try to search again !')->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    }

    public function hello(Request $request){
        $f=$request->q;
        $user = Auth::user();
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($user->user_id,1);
        $searchuser = user::where('name','LIKE','%'.$f.'%')->get();
        return view('search')->withDetails($searchuser)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n)->with('query', $f);

        // $q = Request::get ( 'q' );
        // $n = CheckController::getNotifications();
        // $c=CheckController::checkConnection($user->user_id);
        // $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        // if(count($user) > 0)
        //     return view('search')->withDetails($user)->withQuery ( $q )->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
        // else return view ('search')->withMessage('No Details found. Try to search again !')->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    }

    public function sentRequest($id){
        event(new MyEvent($id));
        $user=User::find($id);
        alert()->success('Request Sent Successfully.','You have successfully sent request to '.$user->name.' in  friend Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }


    public function cancelRequest($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);

            $notif = new Notif;
            $notif->title = "Friend Request Cancelled.";
            $notif->content= $sender->name." cancelled your request in Circle Friend.";
            $notif->read = 0;
            $notif->user_id =$id;
            $notif->sender_id =Auth::user()->user_id;
            $notif->circle_id = 1;
            $notif->save();

        alert()->success('Request Cancelled Successfully.','You have successfully cancelled request of '.$user->name.' in friend Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function unfriend($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);

            $notif = new Notif;
            $notif->title = "Unfriended.";
            $notif->content= $sender->name." remove you from Friends List.";
            $notif->read = 0;
            $notif->user_id =$id;
            $notif->sender_id =Auth::user()->user_id;
            $notif->circle_id = 1;
            $notif->save();

        alert()->success('Friend Successfully Removed.','You have successfully removed '.$user->name.' from your friend list')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function acceptRequest($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 1],
            ])
            ->update([
                'approve' => '1',
                'con_ini' => null,
            ]);

            $sender=User::find($sender_id);

            $notif = new Notif;
            $notif->title = "Friend Request Accepted.";
            $notif->content= $sender->name." accepted your request in Circle Friend.";
            $notif->read = 0;
            $notif->user_id =$id;
            $notif->sender_id =Auth::user()->user_id;
            $notif->circle_id = 1;
            $notif->save();

            $user=User::find($id);
            alert()->success('You and '.$user->name.' are now connected through Friend Circle','')->position('top-end')->toToast()->width('24rem');
            return Redirect::back();
    }

    public function defaultPage(){
        alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
        return redirect()->to('/');
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
