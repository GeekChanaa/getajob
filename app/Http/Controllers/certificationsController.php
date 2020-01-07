<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certification;
use App\user_certification;
use Response;
use auth;

class certificationsController extends Controller
{
  // ADD Certification IN USER PROFILE BY AJAX
  public function addAjax(Request $request){
    $user_certification = new user_certification;
    $user_certification->user_id = Auth::user()->id;
    $user_certification->certification = $request->certification;
    $user_certification->issuing_organization = $request->issuing_organization;
    $user_certification->date_obtained = $request->date_obtained;
    $user_certification->expiry_date = $request->expiry_date;
    $user_certification->save();
    return Response::json(array('success'=>true,'user_certification'=>$user_certification));
  }

  // Delete certification
  public function deleteAjax(Request $request){
    $user_certification = user_certification::where('id','=',$request->id)->first();
    $user_certification->delete();
    return Response::json(array('success'=>true,));
  }
}
