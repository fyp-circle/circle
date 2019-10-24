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
}
