<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $primaryKey = 'comment_id';

    public function post(){
        return $this->belongsTo('App\Post','post_id','post_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }
}
