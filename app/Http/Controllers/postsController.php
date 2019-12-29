<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;
use App\reply;
use auth;

use Response;

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

    // Add post ajax
    public function addpost(Request $request){
      $post = new post;
      $post->content = $request->content;
      $post->user_id = Auth::user()->id;
      $post->save();
      return Response::json(array('success'=>true,'post'=>$post));
    }

    //Comment on a post
    public function addcomment(Request $request){
      $comment = new comment;
      $comment->content= $request->content;
      $comment->user_id = Auth::user()->id;
      $comment->post_id = $request->id;
      $comment->save();
      return Response::json(array('success'=>true,'comment'=>$comment));
    }

    //add reply
    public function addreply(Request $request){
      $reply = new reply;
      $reply->content = $request->content;
      $reply->user_id = Auth::user()->id;
      $reply->comment_id = $request->id;
      $reply->save();
      return Response::json(array('success'=>true,'reply'=>$reply));
    }
}
