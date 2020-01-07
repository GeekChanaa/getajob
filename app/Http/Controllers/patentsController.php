<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patent;
use Response;
use auth;


class patentsController extends Controller
{
    // ADD PATENT IN USER PROFILE BY AJAX
    public function addAjax(Request $request){
      $patent = new patent;
      $patent->user_id = Auth::user()->id;
      $patent->title = $request->title;
      $patent->office = $request->office;
      $patent->status = $request->status;
      $patent->issue_date = $request->issue_date;
      $patent->description = $request->description;
      $patent->save();
      return Response::json(array('success'=>true,'patent'=>$patent));
    }

    // Delete project
    public function deleteAjax(Request $request){
      $patent = patent::where('id','=',$request->id)->first();
      $patent->delete();
      return Response::json(array('success'=>true,));
    }
}
