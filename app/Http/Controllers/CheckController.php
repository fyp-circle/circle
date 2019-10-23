<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Post;

class CheckController extends Controller
{

    public function check()
    {
        // $circles = User::find(0)->circles;
        // return $circles;

        // $posts = User::find(1)->posts;
        // return $posts;

        // $circles = User::find(1)->circles;
        // return $circles;

        $post = Post::find(1);

        return $post->user->name;
    }
}
