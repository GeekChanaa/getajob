<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\language;
use App\user_language;
use Response;
use auth;


class languagesController extends Controller
{
  // ADD PATENT IN USER PROFILE BY AJAX
  public function addAjax(Request $request){
    $user_language = new user_language;
    $user_language->user_id = Auth::user()->id;
    $user_language->language_id = $request->language_id;
    $user_language->save();
    $user_language = user_language::where('id','=',$user_language->id)->with('language')->first();
    return Response::json(array('success'=>true,'user_language'=>$user_language));
  }

  // Delete project
  public function deleteAjax(Request $request){
    $user_language = user_language::where('id','=',$request->id)->first();
    $user_language->delete();
    return Response::json(array('success'=>true,));
  }
}
