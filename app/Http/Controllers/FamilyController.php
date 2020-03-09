<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;
use App\Notif;
use App\Activity;
use Illuminate\Support\Facades\DB;
Use Alert;
use Auth;
use App\Events\MyEvent;
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
}
