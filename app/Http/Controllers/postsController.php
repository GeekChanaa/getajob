<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;
use App\reply;
use auth;

class postsController extends Controller
{
    //Create new post form view
    public function create(){
      return view('jobbing.posts.create');
    }

    //Add post
    public function add(Request $request){
      $post = new post;
      $post->content = $request->content;
      $post->user_id = Auth::user()->id;
      $post->save();
      return redirect('/feed');
    }

    //Comment on a post
    public function addcomment(Request $request){
      $comment = new comment;
      $comment->content= $request->content;
      $comment->user_id = Auth::user()->id;
      $comment->post_id = $request->id;
      $comment->save();
    }
}
