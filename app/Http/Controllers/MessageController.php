<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;
use App\Notif;
use App\Activity;
use App\FamilyUser;
use App\BusinessUser;
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

class MessageController extends Controller
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

    public function getParticularConnection($id,$circle_id){

        $sender=Auth::user();
        $receiver=User::find($id);
        $con = Connection::Where(function($query) use ($sender, $receiver,$circle_id)
        {
            $query->where("user1_id",$sender->user_id)
                ->where("user2_id",$receiver->user_id)
                ->Where("circle_id",$circle_id)
                ->Where("approve",1);
        })
        ->orWhere(function($query) use ($sender, $receiver,$circle_id)
        {
            $query->Where("user1_id",$receiver->user_id)
                ->Where("user2_id",$sender->user_id)
                ->Where("circle_id",$circle_id)
                ->Where("approve",1);

        })
        ->get();
        return $con;
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


    public function indmessage($id,$circle_id){
        $n = MessageController::getNotifications();
        $user = Auth::user();
        $c=MessageController::checkConnection($id,$circle_id);
        if($c!=1){
            alert()->error('Unauthorized way to access our website.','You have tried to access our website maliciously.')->position('top-end')->toToast()->width('24rem');
            return redirect()->to('/');
        }
        else{
            $cons=MessageController::getConnections($user->user_id,$circle_id);
            $current=User::find($id);

            $con_par=MessageController::getParticularConnection($id,$circle_id);
            $messages=$con_par[0]->conversations->messages;
            // return $messages;
            return view("messages.indmessage")->with('messages',$messages)->with('current',$current)->with('cons',$cons)->with('c',$c)->with('user',$user)->with('circle_id',$circle_id)->with('profile_id',$user->user_id)->with('notifications',$n);
        }

    }

    public function sendMessage(Request $request,$circle_id){

        $m = new Message;
        $m->content= $request->content;
        $m->conversation_id = $request->conversation_id;
        $m->sender_id = Auth::user()->user_id;
        $m->save();
        $msender=Auth::user();
        $msenderf=null;
        $msenderb=null;
        if($msender->family_user!=null){
            $msenderf = FamilyUser::find($msender->family_user_id);
            // $msenderf=$msender->family_user();
        }
        if($msender->business_user!=null){
            $msenderb = BusinessUser::find($msender->business_user_id);
            // $msenderb=$msender->business_user();
        }
        $data = array(
            'content' => $request->content,
            'circle_id' => $circle_id,
            'msender' => $msender,
            'msenderf' => $msenderf,
            'msenderb' => $msenderb,
          );
        return $data;

    }
}
