<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use App\comment;
use App\reply;
use App\post_like;
use auth;

class postsController extends Controller
{
  //Listing posts
  public function list(){
    $data=[
      'list_posts' => post::all(),
    ];
    return view('dashboard.posts.list')->with($data);
  }

  //Create form post
  public function create(){
    return view('dashboard.posts.create');
  }

  //Add post post
  public function add(Request $request){
    $post = new post;
    $post->content = $request->content;
    $post->user_id = Auth::user()->id;
    $post->save();
    return redirect('/Dashboard/posts');
  }

  //Delete post
  public function delete(Request $request){
    $post = post::where('id','=',$request->id)->first();
    $post->delete();
    return redirect()->back();
  }

  //Update post form
  public function update($id){
    $post = post::where('id','=',$id)->first();
    $data=[
      'post' => $post,
    ];
    return view('dashboard.posts.update')->with($data);
  }

  //Update post post
  public function updat(Request $request){
    $post = post::where('id','=',$request->id)->first();
    $post->content = $request->content;
    $post->user_id = Auth::user()->id;
    $post->save();
    return redirect('/Dashboard/posts');
  }

  //Show post
  public function show($id){
    $post = post::where('id','=',$id)->first();
    $data=[
      'post' => $post,
    ];
    return view('dashboard.posts.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_posts' => post::all()->count(),
    ];
    return view('dashboard.posts.statistics')->with($data);
  }


}
