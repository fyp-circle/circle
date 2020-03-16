<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
use Auth;

class Connection extends Model
{
    //
    protected  $primaryKey = 'connection_id';

    public function user1()
    {
        return $this->belongsTo('App\User', 'user1_id');
    }

    public function user2()
    {
        return $this->belongsTo('App\User', 'user2_id');
    }

    public function circle(){
        return $this->belongsTo('App\Circle','circle_id','circle_id');
    }

    public function conversations(){
        return $this->belongsTo('App\Conversation','conversation_id','conversation_id');
    }

    public function isOnline(){
        if($this->user1_id!=Auth::user()->user_id){
            return  Cache::has('user-is-online'.$this->user1_id);
        }
        else{
            return  Cache::has('user-is-online'.$this->user2_id);
        }
    }
}
