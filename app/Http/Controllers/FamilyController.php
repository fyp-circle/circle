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
use App\Events\CancelRequest;
use App\Events\AcceptRequest;
use App\Events\RemoveRequest;
use App\Events\StalkingEvent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Events\SentRequestEventF;


class FamilyController extends Controller
{

    public function createActivity($circle_id,$content){
        $a = new Activity;
        $a->content= $content;
        $a->user_id = Auth::user()->user_id;
        $a->circle_id = $circle_id;
        $a->save();
    }

    public function addintofamily(Request $request,$id,$circle_id){
        // return $circle_id;
        event(new SentRequestEventF($id,$request->relation));
        $user=User::find($id);
        $content="You sent request to ".$user->family_user->name."'s Family profile as you are.".$request->relation." of ".$user->family_user->name;
        FamilyController::createActivity($circle_id,$content);
        alert()->success('Request Sent Successfully.','You have successfully sent request to '.$user->name.' in  Family Circle as you are.'.$request->relation.' of '.$user->family_user->name)->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function cancelRequest($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);
            event(new CancelRequest($id,2));
            $content="You cancel request which was sent to ".$user->family_user->name."'s Family profile.";
            FamilyController::createActivity(2,$content);
        alert()->success('Request Cancelled Successfully.','You have successfully cancelled request of '.$user->family_user->name.' in Family Circle.')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }

    public function acceptRequest($id,$sender_id){


        $conversation = new Conversation;
        $conversation->user1_id= $id;
        $conversation->user2_id= Auth::user()->user_id;
        $conversation->circle_id= 2;
        $conversation->save();

        $conv=DB::table('conversations')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->get();

        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->update([
                'approve' => '1',
                // 'con_ini' => null,
                'conversation_id'=> $conv[0]->conversation_id,
            ]);


            $m = new Message;
            $m->content= "Welcome to My Family Circle.";
            $m->conversation_id = $conv[0]->conversation_id;
            $m->sender_id = Auth::user()->user_id;
            $m->save();

            $sender=User::find($sender_id);
            $user=User::find($id);
            event(new AcceptRequest($id,2));
            $content="You have accepted request from ".$user->family_user->name."'s Family profile.";
            FamilyController::createActivity(2,$content);
            alert()->success('You and '.$user->family_user->name.' are now connected through Family Circle','')->position('top-end')->toToast()->width('24rem');
            return Redirect::back();
    }

    public function remove($id,$sender_id){
        DB::table('connections')
            ->where([
                ['user1_id', $id],
                ['user2_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->orWhere([
                ['user2_id', $id],
                ['user1_id', Auth::user()->user_id],
                ['circle_id', 2],
            ])
            ->delete();

            $sender=User::find($sender_id);
            $user=User::find($id);

            event(new RemoveRequest($id,2));


            $content="You have removed ".$user->family_user->name."'s from your Family profile.";
            FamilyController::createActivity(2,$content);

        alert()->success('Family member Successfully Removed.','You have successfully removed '.$user->family_user->name.' from your Family Circle')->position('top-end')->toToast()->width('24rem');
        return Redirect::back();
    }
}
