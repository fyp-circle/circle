<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyUser extends Model
{
    protected  $primaryKey = 'family_user_id';

    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }


    public function users(){
        return $this->hasMany('App\User','user_id','user_id');
    }

}
