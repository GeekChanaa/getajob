<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\training;
use auth;
class trainingsController extends Controller
{
  //Listing trainings
  public function list(){
    $data=[
      'list_trainings' => training::all(),
    ];
    return view('dashboard.trainings.list')->with($data);
  }

  //Create form training
  public function create(){
    return view('dashboard.trainings.create');
  }

  //Add training post
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
    return redirect('/Dashboard/trainings');
  }

  //Delete training
  public function delete(Request $request){
    $training = training::where('id','=',$request->id)->first();
    $training->delete();
    return redirect()->back();
  }

  //Update training form
  public function update($id){
    $training = training::where('id','=',$id)->first();
    $data=[
      'training' => $training,
    ];
    return view('dashboard.trainings.update')->with($data);
  }

  //Update training post
  public function updat(Request $request){
    $training = training::where('id','=',$request->id)->first();
    $training->title = $request->title;
    $training->diplomat = $request->diplomat;
    $training->description = $request->description;
    $training->conditions = $request->conditions;
    $training->phone = $request->phone;
    $training->email = $request->email;
    $training->school = $request->school;
    $training->save();
    return redirect('/Dashboard/trainings');
  }

  //Show training
  public function show($id){
    $training = training::where('id','=',$id)->first();
    $data=[
      'training' => $training,
    ];
    return view('dashboard.trainings.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_trainings' => training::all()->count(),
    ];
    return view('dashboard.trainings.statistics')->with($data);
  }
}
