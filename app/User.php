<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cache;

class User extends Authenticatable implements MustVerifyEmail
{
    protected  $primaryKey = 'user_id';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function circles(){
    //     return $this->hasMany('App\Circle','user_id','user_id');
    // }

    public function posts(){
        return $this->hasMany('App\Post','user_id','user_id');
    }

    public function messages(){
        return $this->hasMany('App\Message','sender_id','user_id');
    }

    public function activities(){
        return $this->hasMany('App\Activity','user_id','user_id');
    }

    public function likes(){
        return $this->hasMany('App\Like','user_id','user_id');
    }

    public function notifs(){
        return $this->hasMany('App\Notif','user_id','user_id');
    }

    public function notifs1(){
        return $this->hasMany('App\Notif','user_id','user_id');
    }

    public function connections1(){
        return $this->hasMany('App\Connection','user1_id','user_id');
    }

    public function connections2(){
        return $this->hasMany('App\Connection','user2_id','user_id');
    }

    public function conversations1(){
        return $this->hasMany('App\Conversation','user1_id','user_id');
    }

    public function conversations2(){
        return $this->hasMany('App\Conversation','user2_id','user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','user_id','user_id');
    }

    public function business_users(){
        return $this->hasMany('App\BusinessUser','business_user_id','business_user_id');
    }

    public function family_users(){
        return $this->hasMany('App\FamilyUser','family_user_id','family_user_id');
    }

    public function business_user(){
        return $this->belongsTo('App\BusinessUser','business_user_id','business_user_id');
    }

    public function family_user(){
        return $this->belongsTo('App\FamilyUser','family_user_id','family_user_id');
    }

    public function isOnline(){
        return  Cache::has('user-is-online'.$this->user_id);
    }

    public function reports(){
        return $this->hasMany('App\Report','user_id','user_id');
    }
}
