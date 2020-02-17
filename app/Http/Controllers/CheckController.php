<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;
use Illuminate\Support\Facades\DB;
Use Alert;
use Auth;
use App\Events\MyEvent;
use Illuminate\Support\Facades\Redirect;


class CheckController extends Controller
{

    public function checkConnection($id){
        $c=0;

        if($id==Auth::user()->user_id){
            $c=2; //means user is auth user means show 'Nothing'
        }
        else{
            $a=DB::table('connections')
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
        // return $circle_id;
        $c=CheckController::checkConnection($id);
        return view("main.mainscreen")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id);
    }
    public function mainscreenfamily(){
        //$user = User::find($id);
        $id=Auth::user()->user_id;
        // return $circle_id;
        $c=CheckController::checkConnection($id);
        return view("main.mainscreenfamily")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id);
    }
    public function mainscreenbusiness(){
        //$user = User::find($id);
        $id=Auth::user()->user_id;
        // return $circle_id;
        $c=CheckController::checkConnection($id);
        return view("main.mainscreenbusiness")->with('user',Auth::user())->with('c',$c)->with('circle_id',$circle_id)->with('profile_id',$id);
    }

    public function viewprofile($id, $circle_id){
        $user = User::find($id);

        $c=CheckController::checkConnection($id);
        return view("profileviews.viewprofile")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewphotos($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviews.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewvideos($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviews.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewfriends($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviews.viewfriends")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewabout($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviews.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    //FAMILY
    public function viewprofilefamily($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsfamily.viewprofile")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewphotosfamily($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsfamily.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewvideosfamily($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsfamily.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewfamily($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsfamily.viewfamily")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewaboutfamily($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsfamily.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    //BUSINESS
    public function viewprofilebusiness($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsbusiness.viewprofile")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewphotosbusiness($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsbusiness.viewphotos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewvideosbusiness($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsbusiness.viewvideos")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewbusiness($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsbusiness.viewbusiness")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    public function viewaboutbusiness($id, $circle_id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("profileviewsbusiness.viewabout")->with('user',$user)->with('c',$c)->with('profile_id',$id)->with('circle_id',$circle_id);
    }
    //ADD NEW CIRCLE
    public function addnewcircle(){

        return view("addnewcircle");
    }
    //EDIT INFO
    public function editinfofriends($id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("editinfo.editinfofriends")->with('user',$user)->with('c',$c)->with('profile_id',$id);
    }
    public function editinfofamily($id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("editinfo.editinfofamily")->with('user',$user)->with('c',$c)->with('profile_id',$id);
    }
    public function editinfobusiness($id){
        $user = User::find($id);
        $c=CheckController::checkConnection($id);
        return view("editinfo.editinfobusiness")->with('user',$user)->with('c',$c)->with('profile_id',$id);
    }
    //MAIN SETTINGS
    public function mainsettings(){

        return view("accountsettings.mainsettings");
    }
    public function privacysettings(){

        return view("accountsettings.privacysettings");
    }
    public function changepassword(){

        return view("accountsettings.changepassword");
    }
    //ACTIIVTY LOG
    public function activityfriends(){

        return view("activitylog.activityfriends");
    }
    public function activityfamily(){

        return view("activitylog.activityfamily");
    }
    public function activitybusiness(){

        return view("activitylog.activitybusiness");
    }
    //MESSAGE
    public function messagefriends(){

        return view("messages.messagefriends");
    }
    public function messagefamily(){

        return view("messages.messagefamily");
    }
    public function inbox(){

        return view("messages.inbox");
    }
    //NEARBY
    public function nearbyfriends(){
        return view("nearby.nearbyfriends");
    }
    public function nearbyfamily(){
        return view("nearby.nearbyfamily");
    }
    public function nearbyconnections(){
        return view("nearby.nearbyconnections");
    }
    //NOTIFICATION
    public function notification(){
        return view("notification");
    }
    //SEARCH
    public function search(){
        return view("search");
    }


    public function sentRequest($id){
        event(new MyEvent($id));
        alert()->success('Request Sent Successfully.','You have successfully sent rquest to friend Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }


    public function cancelRequest($id){
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
        alert()->success('Request Cancelled Successfully.','You have successfully sent rquest to friend Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function acceptRequest($id){
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
