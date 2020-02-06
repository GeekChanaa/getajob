<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;
use App\reply;
use auth;
use App\post_like;
use App\comment_like;
use App\reply_like;
use App\post_report;
use App\comment_report;
use App\reply_report;


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
      $postd = post::where('id','=',$post->id)->with('user')->first();
      return Response::json(array('success'=>true,'post'=>$postd));
    }

    //Comment on a post
    public function addcomment(Request $request){
      $comment = new comment;
      $comment->content= $request->content;
      $comment->user_id = Auth::user()->id;
      $comment->post_id = $request->id;
      $comment->save();
      $comment = comment::where('id','=',$comment->id)->with('user')->first();
      return Response::json(array('success'=>true,'comment'=>$comment));
    }

    //add reply
    public function addreply(Request $request){
      $reply = new reply;
      $reply->content = $request->content;
      $reply->user_id = Auth::user()->id;
      $reply->comment_id = $request->id;
      $reply->save();
      $reply = reply::where('id','=',$reply->id)->with('user')->first();
      return Response::json(array('success'=>true,'reply'=>$reply));
    }

    // Like post
    public function likepost(Request $request){
      $like = new post_like;
      $like->post_id = $request->post_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Like post
    public function unlikepost(Request $request){
      $like = post_like::where('post_id','=',$request->post_id);
      $like->delete();
    }

    // Like comment
    public function likecomment(Request $request){
      $like = new comment_like;
      $like->comment_id = $request->comment_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Like reply
    public function likereply(Request $request){
      $like = new reply_like;
      $like->reply_id = $request->reply_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Like post
    public function reportpost(Request $request){
      $like = new post_report;
      $like->post_id = $request->post_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Like comment
    public function reportcomment(Request $request){
      $like = new comment_report;
      $like->comment_id = $request->comment_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Like reply
    public function reportreply(Request $request){
      $like = new reply_report;
      $like->reply_id = $request->reply_id;
      $like->user_id = Auth::user()->id;
      $like->save();
    }

    // Post page
    public function show($id){
      $post = post::where('id','=',$id)->first();
      $data=[
        'post' => $post,
      ];
      return view('jobbing.posts.show')->with($data);
    }
}
