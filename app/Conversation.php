<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected  $primaryKey = 'conversation_id';

    public function circle(){
        return $this->belongsTo('App\Circle','circle_id','circle_id');
    }

    public function messages(){
        return $this->hasMany('App\Message','conversation_id','conversation_id');
    }

    public function connections(){
        return $this->hasMany('App\Connection','conversation_id','conversation_id');
    }

    public function user1()
    {
        return $this->belongsTo('App\User', 'user1_id');
    }

    public function user2()
    {
        return $this->belongsTo('App\User', 'user2_id');
    }

}
