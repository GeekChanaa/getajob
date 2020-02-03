<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_project;
use Response;
use auth;
class projectsController extends Controller
{
  // ADD PROJECT IN USER PROFILE BY AJAX
  public function addAjax(Request $request){
    $user_project = new user_project;
    $user_project->user_id = Auth::user()->id;
    $user_project->name = $request->name;
    $user_project->date_begin = $request->date_begin;
    $user_project->date_end = $request->date_end;
    $user_project->description = $request->description;
    $user_project->save();
    return Response::json(array('success'=>true,'user_project'=>$user_project));
  }

  // Delete project
  public function deleteAjax(Request $request){
    $user_project = user_project::where('id','=',$request->id)->first();
    $user_project->delete();
    return Response::json(array('success'=>true,));
  }
}
