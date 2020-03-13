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
use App\Activity;
use App\Events\SentRequestEventB;
use App\Events\StalkingEvent;
use Illuminate\Support\Facades\Redirect;
use App\Events\CancelRequest;
use App\Events\AcceptRequest;

class BusinessController extends Controller
{

    public function createActivity($circle_id,$content){
        $a = new Activity;
        $a->content= $content;
        $a->user_id = Auth::user()->user_id;
        $a->circle_id = $circle_id;
        $a->save();
    }


    public function sentRequest($id){
        event(new SentRequestEventB($id));
        $user=User::find($id);
        $content="You sent request to ".$user->business_user->name."'s Business profile.";
        BusinessController::createActivity(3,$content);
        alert()->success('Request Sent Successfully.','You have successfully sent request to '.$user->business_user->name.' in  Business Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }


    public function cancelRequest($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);
            event(new CancelRequest($id,3));
            $content="You cancel request which was sent to ".$user->business_user->name."'s Business profile.";
            BusinessController::createActivity(3,$content);
        alert()->success('Request Cancelled Successfully.','You have successfully cancelled request of '.$user->business_user->name.' in Business Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function disconnect($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);

            $notif = new Notif;
            $notif->title = "Unfriended.";
            $notif->content=  $sender->business_user->name." removed you from Business Circle.";
            $notif->read = 0;
            $notif->user_id =$id;
            $notif->sender_id =Auth::user()->user_id;
            $notif->circle_id =3;
            $notif->save();


            $content="You have disconnected ".$user->business_user->name."'s Business profile.";
        BusinessController::createActivity(3,$content);

        alert()->success('Connection Successfully Removed.','You have successfully removed '.$user->business_user->name.' from your Business Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function acceptRequest($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 3],
            ])
            ->update([
                'approve' => '1',
                'con_ini' => null,
            ]);

            $sender=User::find($sender_id);
            $user=User::find($id);
            event(new AcceptRequest($id,3));

            $content="You have accepted request from ".$user->business_user->name."'s Business profile.";
        BusinessController::createActivity(3,$content);
            alert()->success('You and '.$user->business_user->name.' are now connected through Business Circle','')->position('top-end')->toToast()->width('24rem');
            return Redirect::back();
    }
}
