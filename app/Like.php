<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected  $primaryKey = 'like_id';
    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }

    public function post(){
        return $this->belongsTo('App\Post','post_id','post_id');
    }
}
