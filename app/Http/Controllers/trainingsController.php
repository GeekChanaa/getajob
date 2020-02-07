<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\training;
use App\training_interest;
use Response;
use auth;

class trainingsController extends Controller
{
  //Create training form
  public function create(){
    return view('jobbing.trainings.create');
  }

  //add training
  public function add(Request $request){
    $training = new training;
    $training->title = $request->title;
    $training->diplomat = $request->diplomat;
    $training->description = $request->description;
    $training->conditions = $request->conditions;
    $training->phone = $request->phone;
    $training->email = $request->email;
    $training->school = $request->school;
    $training->user_id = Auth::user()->id;
    $training->save();
    return redirect('/trainings');
  }

  // Interested in training
  public function interestedIn(Request $request){
    $II = new training_interest;
    $II->training_id = $request->id;
    $II->user_id = Auth::user()->id;
    $II->save();
    return Response::json(array('success'=>true,'training'=>$II));
  }

  // Trainings
  public function trainings(){
    if(isset($_GET['search'])){
      $list_trainings = training::where('title','like','%'.$_GET['search'].'%')->get();
    }
    else{
      $list_trainings = training::all();
    }
    $data=[
      'list_trainings' => $list_trainings,
    ];
    return view('jobbing.trainings.trainings')->with($data);
  }
}
