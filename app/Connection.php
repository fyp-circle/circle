<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
