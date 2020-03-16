<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Conversation;
use App\Circle;
use App\Notif;
use App\Activity;
use App\Message;
use Illuminate\Support\Facades\DB;
Use Alert;
use Auth;
use App\Events\MyEvent;
use App\Events\StalkingEvent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Events\CancelRequest;
use App\Events\AcceptRequest;
use App\Events\RemoveRequest;


class CheckController extends Controller
{


    public function getNotifications(){
        $n =User::find(Auth::user()->user_id)->notifs()->orderBy('created_at','desc')->take(10)->get();
        return $n;
    }

    public function createActivity($circle_id,$content){
        $a = new Activity;
        $a->content= $content;
        $a->user_id = Auth::user()->user_id;
        $a->circle_id = $circle_id;
        $a->save();
    }

    public function getMyPosts($circle_id,$id){
        // $posts=DB::table('posts')
        //     ->where([
        //         ['user_id', Auth::user()->user_id],
        //         ['circle_id', $circle_id],
        //     ])
        //     ->get();

        // $posts = DB::table('posts')->where('user_id', Auth::user()->user_id)->where('circle_id', $circle_id)->orderBy('updated_at','desc')->get();
        $posts = User::find($id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
            return $posts;
    }

    public function getCirclePosts($circle_id){
        $cons1 = User::find(Auth::user()->user_id)->connections1()->where('circle_id',$circle_id)->where('approve',1)->get();
        // return $cons1;
        $cons2 = User::find(Auth::user()->user_id)->connections2()->where('circle_id',$circle_id)->where('approve',1)->get();

        $cons= $cons1->merge($cons2);
        $all_posts= collect();
        foreach ($cons as $con) {
            if ($con->user1->user_id!=Auth::user()->user_id) {
                $posts = User::find($con->user1->user_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
                $all_posts= $all_posts->merge($posts);
            }
            else {
                $posts = User::find($con->user2->user_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
                $all_posts= $all_posts->merge($posts);
            }
        }
        $posts = User::find(Auth::user()->user_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
        $all_posts= $all_posts->merge($posts);
        $sorted_posts = $all_posts->sortByDesc('updated_at',);
        return $sorted_posts;
        // $con=DB::table('connections')
        //     ->where([
        //         ['user2_id', Auth::user()->user_id],
        //         ['circle_id', $circle_id],
        //     ])
        //     ->orWhere([
        //         ['user1_id', Auth::user()->user_id],
        //         ['circle_id', $circle_id],
        //     ])
        //     ->get();
        //     // $items=collect();
        //     foreach ($con as $c) {
        //         if ($c->user1_id != Auth::user()->user_id) {
        //             $first[]=(User::find($c->user1_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get());
        //         } else {
        //             $first[]=(User::find($c->user2_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get());
        //         }
        //         // $items->push($first);

        //     }
        //     $first[]=(User::find(Auth::user()->user_id)->posts()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get());
        //     // $items=$items->sortBy('updated_at');
        //     // $items->toJson();
        //     dd($first);
        // return $first;
    }


    public function getConnections($id,$circle_id){
        $cons1 = User::find($id)->connections1()->where('circle_id',$circle_id)->where('approve',1)->get();
        // return $cons1;
        $cons2 = User::find($id)->connections2()->where('circle_id',$circle_id)->where('approve',1)->get();

        $cons= $cons1->merge($cons2);
        return $cons;
    }

    public function getFriendRequests($id,$circle_id){
        $cons1 = User::find($id)->connections1()->where('circle_id',$circle_id)->where('con_ini','!=',$id)->where('approve',0)->get();
        // return $cons1;
        $cons2 = User::find($id)->connections2()->where('circle_id',$circle_id)->where('con_ini','!=',$id)->where('approve',0)->get();

        $cons= $cons1->merge($cons2);
        return $cons;
    }

    public function getSentRequests($id,$circle_id){
        $cons1 = User::find($id)->connections1()->where('circle_id',$circle_id)->where('con_ini',$id)->where('approve',0)->get();
        // return $cons1;
        $cons2 = User::find($id)->connections2()->where('circle_id',$circle_id)->where('con_ini',$id)->where('approve',0)->get();

        $cons= $cons1->merge($cons2);
        return $cons;
    }


    public function getConnection($id,$circle_id){
        $c=0;
        $a=1;
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
        return $a;
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
        $my_posts=CheckController::getCirclePosts($circle_id);
        // return $my_posts;
        // $my_posts=CheckController::getMyPosts($circle_id,$id);
        $cons=CheckController::getConnections($id,$circle_id);
        $c=CheckController::checkConnection($id,$circle_id);
        return view("main.mainscreen")->with('cons',$cons)->with('posts',$my_posts)->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
    }
    public function mainscreenfamily($circle_id){
        if (Auth::user()->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        } else {
           //$user = User::find($id);
            $id=Auth::user()->user_id;
            // return $circle_id;
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $my_posts=CheckController::getCirclePosts($circle_id);
            $cons=CheckController::getConnections($id,$circle_id);
            return view("main.mainscreenfamily")->with('cons',$cons)->with('posts',$my_posts)->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
        }


    }
    public function mainscreenbusiness($circle_id){
        if (Auth::user()->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else {
            //$user = User::find($id);
        $id=Auth::user()->user_id;
        // return $circle_id;
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($id,$circle_id);
        $my_posts=CheckController::getCirclePosts($circle_id);
        $cons=CheckController::getConnections($id,$circle_id);
        return view("main.mainscreenbusiness")->with('cons',$cons)->with('posts',$my_posts)->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id)->with('notifications',$n);
        }


    }

    public function viewprofile($id, $circle_id){

        $user = User::find($id);
        if ($user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else {
            $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($id,$circle_id);
        $content="You Viewed ".$user->name."'s Friends profile.";
        if ($c!=2) {
            CheckController::createActivity($circle_id,$content);
        }

        if($c!=1 && $c!=2){
            // event(new StalkingEvent($circle_id,$id));
        }
        $my_posts=CheckController::getMyPosts($circle_id,$id);
        // return $my_posts;
        return view("profileviews.viewprofile")->with('posts',$my_posts)->with('notifications',$n)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
        }


    }
    public function viewphotos($id, $circle_id){

        $user = User::find($id);
        if ($user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $my_posts=CheckController::getMyPosts($circle_id,$id);
            return view("profileviews.viewphotos")->with('posts',$my_posts)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewvideos($id, $circle_id){

        $user = User::find($id);
        if ($user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            return view("profileviews.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewfriends($id, $circle_id){
        $user = User::find($id);
        if ($user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $c=CheckController::checkConnection($id,$circle_id);
         $n = CheckController::getNotifications();
         $cons=CheckController::getConnections($id,$circle_id);
         $reqs=CheckController::getFriendRequests($id,$circle_id);
         $sreqs=CheckController::getSentRequests($id,$circle_id);
        //  return $cons;
        return view("profileviews.viewfriends")->with('sreqs',$sreqs)->with('cons',$cons)->with('reqs',$reqs)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }
    }
    public function viewabout($id, $circle_id){


        $user = User::find($id);
        if ($user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            return view("profileviews.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    //FAMILY
    public function viewprofilefamily($id, $circle_id){

         $user = User::find($id);
         if (Auth::user()->family_user==null || $user==null || $user->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $con=CheckController::getConnection($id,$circle_id);
            $content="You Viewed ".$user->family_user->name."'s Family profile.";
            $my_posts=CheckController::getMyPosts($circle_id,$id);

           if ($c!=2) {
               CheckController::createActivity($circle_id,$content);
           }

           return view("profileviewsfamily.viewprofile")->with('con',$con)->with('posts',$my_posts)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewphotosfamily($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->family_user==null || $user==null || $user->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $my_posts=CheckController::getMyPosts($circle_id,$id);
            $con=CheckController::getConnection($id,$circle_id);
            return view("profileviewsfamily.viewphotos")->with('con',$con)->with('posts',$my_posts)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewvideosfamily($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->family_user==null || $user==null || $user->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $con=CheckController::getConnection($id,$circle_id);
            return view("profileviewsfamily.viewvideos")->with('con',$con)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewfamily($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->family_user==null || $user==null || $user->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $cons=CheckController::getConnections($id,$circle_id);
            $reqs=CheckController::getFriendRequests($id,$circle_id);
            $sreqs=CheckController::getSentRequests($id,$circle_id);
            $con=CheckController::getConnection($id,$circle_id);
            return view("profileviewsfamily.viewfamily")->with('con',$con)->with('sreqs',$sreqs)->with('cons',$cons)->with('reqs',$reqs)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewaboutfamily($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->family_user==null || $user==null || $user->family_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }

        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $con=CheckController::getConnection($id,$circle_id);
            return view("profileviewsfamily.viewabout")->with('con',$con)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    //BUSINESS
    public function viewprofilebusiness($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->business_user==null || $user==null || $user->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $content="You Viewed ".$user->business_user->name."'s Business profile.";
            if ($c!=2) {
                CheckController::createActivity($circle_id,$content);
            }
            if($c!=1 && $c!=2){
                // event(new StalkingEvent($circle_id,$id));
            }
            $my_posts=CheckController::getMyPosts($circle_id,$id);
            return view("profileviewsbusiness.viewprofile")->with('posts',$my_posts)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }
    }
    public function viewphotosbusiness($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->business_user==null || $user==null || $user->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $my_posts=CheckController::getMyPosts($circle_id,$id);
            return view("profileviewsbusiness.viewphotos")->with('posts',$my_posts)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewvideosbusiness($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->business_user==null || $user==null || $user->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            return view("profileviewsbusiness.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function viewbusiness($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->business_user==null || $user==null || $user->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            $cons=CheckController::getConnections($id,$circle_id);
            $reqs=CheckController::getFriendRequests($id,$circle_id);
            $sreqs=CheckController::getSentRequests($id,$circle_id);
            return view("profileviewsbusiness.viewbusiness")->with('sreqs',$sreqs)->with('cons',$cons)->with('reqs',$reqs)->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }
    }
    public function viewaboutbusiness($id, $circle_id){

        $user = User::find($id);
        if (Auth::user()->business_user==null || $user==null || $user->business_user==null) {
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($id,$circle_id);
            return view("profileviewsbusiness.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id)->with('notifications',$n);
        }
    }
    //ADD NEW CIRCLE
    public function addnewcircle($circle_id){
         $n = CheckController::getNotifications();

        return view("addnewcircle")->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //EDIT INFO
    public function editinfofriends($circle_id){

        $user = Auth::user();
        $n = CheckController::getNotifications();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("editinfo.editinfofriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function editinfofamily($circle_id){

        $user = Auth::user();
        if($user->family_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            return view("editinfo.editinfofamily")->with('c',$c)->with('user',$user)->with('profile_id',$user->user_id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

    }
    public function editinfobusiness($circle_id){
        $user = Auth::user();
        if($user->business_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            return view("editinfo.editinfobusiness")->with('c',$c)->with('user',$user)->with('profile_id',$user->user_id)->with('circle_id',$circle_id)->with('notifications',$n);
        }

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

       $activities=User::find(Auth::user()->user_id)->activities()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
    //    return $activities;

        return view("activitylog.activityfriends")->with('activities',$activities)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function activityfamily($circle_id){
        $user = Auth::user();
        if($user->family_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            $activities=User::find(Auth::user()->user_id)->activities()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
             return view("activitylog.activityfamily")->with('activities',$activities)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }

    }
    public function activitybusiness($circle_id){
        $user = Auth::user();
        if($user->business_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            $activities=User::find(Auth::user()->user_id)->activities()->where('circle_id',$circle_id)->orderBy('updated_at','desc')->get();
            return view("activitylog.activitybusiness")->with('activities',$activities)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }
    }
    public function allactivities($circle_id){
        $user = Auth::user();
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($user->user_id,$circle_id);
        $activities=User::find(Auth::user()->user_id)->activities()->orderBy('updated_at','desc')->get();
        return view("activitylog.allactivities")->with('activities',$activities)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);

    }


    //MESSAGE
    public function messagefriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
        $c=CheckController::checkConnection($user->user_id,$circle_id);
        $cons=CheckController::getConnections($user->user_id,$circle_id);
        return view("messages.messagefriends")->with('cons',$cons)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function messagefamily($circle_id){
        $user = Auth::user();
        if($user->family_user==null){
                alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            $cons=CheckController::getConnections($user->user_id,$circle_id);
            return view("messages.messagefamily")->with('cons',$cons)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }

    }
    public function messagebusiness($circle_id){
        $user = Auth::user();
        if($user->business_user==null){
                alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            $cons=CheckController::getConnections($user->user_id,$circle_id);
            return view("messages.messagebusiness")->with('cons',$cons)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }

    }
    public function inbox($circle_id){
        $user = Auth::user();
        if($user->business_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            return view("messages.inbox")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }
    }
    //NEARBY
    public function nearbyfriends($circle_id){
         $n = CheckController::getNotifications();
        $user = Auth::user();
       $c=CheckController::checkConnection($user->user_id,$circle_id);
        return view("nearby.nearbyfriends")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
    }
    public function nearbyfamily($circle_id){
        $user = Auth::user();
        if($user->family_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            return view("nearby.nearbyfamily")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }

    }
    public function nearbyconnections($circle_id){
        $user = Auth::user();
        if($user->business_user==null){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $n = CheckController::getNotifications();
            $c=CheckController::checkConnection($user->user_id,$circle_id);
            return view("nearby.nearbyconnections")->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }
    }
    //NOTIFICATION
    public function notification($circle_id){
        $user = Auth::user();
         $n = CheckController::getNotifications();
         $c=CheckController::checkConnection($user->user_id,1);
        return view("notification")->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('circle_id',$circle_id)->with('notifications',$n);
    }
    //SEARCH
    // public function search(){
    //     $user = Auth::user();
    //     $n = CheckController::getNotifications();
    //     $c=CheckController::checkConnection($user->user_id);
    //     return view("search")->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    // }
    public function search($circle_id){
        $user = Auth::user();
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($user->user_id,1);
        return view('search')->with('user',$user)->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);

        // $q = Request::get ( 'q' );
        // $n = CheckController::getNotifications();
        // $c=CheckController::checkConnection($user->user_id);
        // $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        // if(count($user) > 0)
        //     return view('search')->withDetails($user)->withQuery ( $q )->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
        // else return view ('search')->withMessage('No Details found. Try to search again !')->with('user',$user)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n);
    }

    public function hello(Request $request,$circle_id){
        $f=$request->q;
        $user = Auth::user();
        $n = CheckController::getNotifications();
        $c=CheckController::checkConnection($user->user_id,1);
        $searchuser = user::where('name','LIKE','%'.$f.'%')->get();
        return view('search')->withDetails($searchuser)->with('circle_id',$circle_id)->with('c',$c)->with('profile_id',$user->user_id)->with('notifications',$n)->with('query', $f);

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
        $content="You sent request to ".$user->name."'s Friend profile.";
        CheckController::createActivity(1,$content);
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
            event(new CancelRequest($id,1));
            $content="You cancelled request which was sent to ".$user->name."'s Friend profile.";
            CheckController::createActivity(1,$content);
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
            event(new RemoveRequest($id,1));
            $sender=User::find($sender_id);
            $user=User::find($id);


            $content="You unfriended ".$user->name."'s Friend profile.";
            CheckController::createActivity(1,$content);
        alert()->success('Friend Successfully Removed.','You have successfully removed '.$user->name.' from your friend list')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function acceptRequest($id,$sender_id){

        $conversation = new Conversation;
        $conversation->user1_id= $id;
        $conversation->user2_id= Auth::user()->user_id;
        $conversation->circle_id= 1;
        $conversation->save();

        $conv=DB::table('conversations')
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
            ->get();
            // return $conv;
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
                'conversation_id'=>$conv[0]->conversation_id,
            ]);


            $m = new Message;
            $m->content= "Welcome to My Friends Circle.";
            $m->conversation_id = $conv[0]->conversation_id;
            $m->sender_id = Auth::user()->user_id;
            $m->save();

            $sender=User::find($sender_id);
            $user=User::find($id);
            event(new AcceptRequest($id,1));
            $content="You accepted the request from ".$user->name."'s Friend profile.";
        CheckController::createActivity(1,$content);
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
