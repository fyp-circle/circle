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
        if ($circle_id==1) {
            $request->image->move(public_path('images/posts/Friend'), $i);
        } else {
            if ($circle_id==2) {
                $request->image->move(public_path('images/posts/Family'), $i);
            } else {
                $request->image->move(public_path('images/posts/Business'), $i);
            }

        }



        }
        if($request->hasFile('cam'))
        {
            $ca = time().'.'.$request->cam->extension();
            if ($circle_id==1) {
                $request->cam->move(public_path('images/posts/Friend'), $ca);
            } else {
                if ($circle_id==2) {
                    $request->cam->move(public_path('images/posts/Family'), $ca);
                } else {
                    $request->cam->move(public_path('images/posts/Business'), $ca);
                }

            }


        }

        if($request->hasFile('video'))
        {

        $v = time().'.'.$request->video->extension();
        if ($circle_id==1) {
            $request->video->move(public_path('videos/posts/Friend'), $v);
        } else {
            if ($circle_id==2) {
                $request->video->move(public_path('videos/posts/Family'), $v);
            } else {
                $request->video->move(public_path('videos/posts/Business'), $v);
            }

        }


        }


        if($request->hasFile('audio'))
        {

        $a = time().'.'.$request->audio->extension();
        if ($circle_id==1) {
            $request->audio->move(public_path('audio/posts/Friend'), $a);
        } else {
            if ($circle_id==2) {
                $request->audio->move(public_path('audio/posts/Family'), $a);
            } else {
                $request->audio->move(public_path('audio/posts/Business'), $a);
            }

        }


        }


        $post = new Post;
        $post->content = $request->content;
        $post->user_id = Auth::user()->user_id;
        $post->circle_id = $circle_id;
        if($request->hasFile('image'))
        {
            if ($circle_id==1) {
                $post->picture = 'images/posts/Friend/'.$i;
            } else {
                if ($circle_id==2) {
                    $post->picture = 'images/posts/Family/'.$i;
                } else {
                    $post->picture = 'images/posts/Business/'.$i;
                }

            }


        }
        $post->save();

        $a = new Activity;
        $a->content= "You created a New Post.";
        $a->user_id = Auth::user()->user_id;
        $a->circle_id = $circle_id;
        $a->save();


        if ($circle_id==1) {
            alert()->success('Post Created','You have successfully Created A post in your Friends Circle.')->position('top-end')->toToast()->width('24rem');
            return redirect()->route('mainscreen',['circle_id'=>$circle_id]);
        } else {
            if ($circle_id==2) {
                alert()->success('Post Created','You have successfully Created A post in your Family Circle.')->position('top-end')->toToast()->width('24rem');
                return redirect()->route('mainscreenfamily',['circle_id'=>$circle_id]);
            } else {
                alert()->success('Post Created','You have successfully Created A post in your Business Circle.')->position('top-end')->toToast()->width('24rem');
                return redirect()->route('mainscreenbusiness',['circle_id'=>$circle_id]);
            }

        }



    }
}
