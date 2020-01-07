<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\volunteer_experience;
use Response;
use auth;

class volunteerExperiencesController extends Controller
{
  // ADD PATENT IN USER PROFILE BY AJAX
  public function addAjax(Request $request){
    $volunteer_experience = new volunteer_experience;
    $volunteer_experience->user_id = Auth::user()->id;
    $volunteer_experience->organisation = $request->organisation;
    $volunteer_experience->role = $request->role;
    $volunteer_experience->cause = $request->cause;
    $volunteer_experience->current = $request->current;
    $volunteer_experience->start_date = $request->start_date;
    $volunteer_experience->end_date = $request->end_date;
    $volunteer_experience->description = $request->description;
    $volunteer_experience->save();
    return Response::json(array('success'=>true,'volunteer_experience'=>$volunteer_experience));
  }

  // Delete project
  public function deleteAjax(Request $request){
    $volunteer_experience = volunteer_experience::where('id','=',$request->id)->first();
    $volunteer_experience->delete();
    return Response::json(array('success'=>true,));
  }
}
