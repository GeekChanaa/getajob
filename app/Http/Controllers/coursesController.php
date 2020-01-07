<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\user_course;
use Response;

class coursesController extends Controller
{
  // ADD COURSE IN USER PROFILE BY AJAX
  public function addAjax(Request $request){
    $user_course = new user_course;
    $user_course->user_id = Auth::user()->id;
    $user_course->name = $request->name;
    $user_course->save();
    return Response::json(array('success'=>true,'user_course'=>$user_course));
  }

  // Delete Course
  public function deleteAjax(Request $request){
    $user_course = user_course::where('id','=',$request->id)->first();
    $user_course->delete();
    return Response::json(array('success'=>true,));
  }
}
