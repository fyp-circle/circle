<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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
    protected $hidden = [
        'password', 'remember_token',
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

    public function connections1(){
        return $this->hasMany('App\Connection','user1_id','user1_id');
    }

    public function connections2(){
        return $this->hasMany('App\Connection','user2_id','user2_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','user_id','user_id');
    }
}
