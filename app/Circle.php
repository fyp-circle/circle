<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected  $primaryKey = 'circle_id';


    // public function user(){
    //     return $this->belongsTo('App\User','user_id','user_id');
    // }

    public function posts(){
        return $this->hasMany('App\Post','circle_id','circle_id');
    }

    public function notifs(){
        return $this->hasMany('App\Notif','circle_id','circle_id');
    }

    public function conversations(){
        return $this->hasMany('App\Conversation','circle_id','circle_id');
    }

    public function connections(){
        return $this->hasMany('App\Connection','connection_id','connection_id');
    }

    public function activities(){
        return $this->hasMany('App\Activity','circle_id','circle_id');
    }
}
