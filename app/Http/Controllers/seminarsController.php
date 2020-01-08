<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\seminar;
use App\seminar_interest;
use Response;
use auth;

class seminarsController extends Controller
{
    //Create seminar form
    public function create(){
      return view('jobbing.seminars.create');
    }

    //add seminar
    public function add(Request $request){
      $seminar = new seminar;
      $seminar->title = $request->title;
      $seminar->begin = $request->begin;
      $seminar->end = $request->end;
      $seminar->user_id = Auth::user()->id;
      $seminar->description = $request->description;
      $seminar->save();
      return redirect('/feed');
    }

    //Seminars Page
    public function seminars(){
      $data=[
        'list_seminars' => seminar::all(),
      ];
      return view('jobbing.seminars.seminars')->with($data);
    }

    // Interested in seminar
    public function interestedIn(Request $request){
      $II = new seminar_interest;
      $II->seminar_id = $request->id;
      $II->user_id = Auth::user()->id;
      $II->save();
      return Response::json(array('success'=>true,'seminar'=>$II));
    }
}
