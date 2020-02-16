<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }

    public function circle(){
        return $this->belongsTo('App\Circle','circle_id','circle_id');
    }


}
