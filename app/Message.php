<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected  $primaryKey = 'message_id';

    public function conversations(){
        return $this->belongsTo('App\Conversation','conversation_id','conversation_id');
    }

    public function sender(){
        return $this->belongsTo('App\User','sender_id','user_id');
    }
}
