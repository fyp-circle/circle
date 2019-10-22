<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected  $primaryKey = 'circle_id';
    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }
}
