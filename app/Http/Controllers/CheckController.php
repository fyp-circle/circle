<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Connection;
use App\Circle;


class CheckController extends Controller
{

    public function check()
    {
        // $posts = User::find(1)->posts;
        // return $posts;

        // $post = Post::find(1);

        // return $post->user->name;


        //Relation between user1 and connection

        // $a = User::find(1)->connections1;
        // return $a;

        // $b = Connection::find(1);
        // return $b->user1->name;


        //Relation between user2 and connection

        // $c = User::find(1)->connections2;
        // return $c;

        // $d = Connection::find(1);
        // return $d->user2->name;


        //Relation between circle and connection

        // $connections = Circle::find(2)->connections;
        // return $connections;

        // $connection = Connection::find(2);

        // return $connection->circle->name;
    }

    public function login(){
        return view("our_login");
    }

    public function mainscreen(){
        return view("mainscreen");
    }
}
