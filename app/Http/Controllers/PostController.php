<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Activity;

class PostController extends Controller
{
    public function createPost(Request $request,$circle_id){

        // return $circle_id;

        $request->validate([

            // 'cam' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            // 'video'  => 'nullable|mimes:mp4,mov,ogg,qt | max:20000',
            // 'audio' => 'nullable|mimes:mpga,wav',

        ]);

        if($request->hasFile('image'))
        {

        $i = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/posts/Friend'), $i);

        }
        if($request->hasFile('cam'))
        {
            $ca = time().'.'.$request->cam->extension();
            $request->cam->move(public_path('images/posts/Friend'), $ca);

        }

        if($request->hasFile('video'))
        {

        $v = time().'.'.$request->video->extension();
        $request->video->move(public_path('videos/posts/Friend'), $v);

        }


        if($request->hasFile('audio'))
        {

        $a = time().'.'.$request->audio->extension();
        $request->audio->move(public_path('audio/posts/Friend'), $a);

        }


        $post = new Post;
        $post->content = $request->content;
        $post->user_id = Auth::user()->user_id;
        $post->circle_id = $circle_id;
        if($request->hasFile('image'))
        {
            $post->picture = 'images/posts/Friend/'.$i;

        }
        $post->save();

        $a = new Activity;
        $a->content= "You created a New Post.";
        $a->user_id = Auth::user()->user_id;
        $a->circle_id = 1;
        $a->save();

        alert()->success('Post Created','You have successfully Created A post in your Friends Circle.')->position('top-end')->toToast()->width('24rem');



        return redirect()->route('mainscreen',['circle_id'=>$circle_id]);


    }
}
