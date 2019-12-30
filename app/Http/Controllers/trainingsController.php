<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\training;

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
    $training->save();
    return redirect('/feed');
  }
}
