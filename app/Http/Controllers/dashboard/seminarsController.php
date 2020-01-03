<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\seminar;
use auth;

class seminarsController extends Controller
{
  //Listing seminars
  public function list(){
    $data=[
      'list_seminars' => seminar::all(),
    ];
    return view('dashboard.seminars.list')->with($data);
  }

  //Create form seminar
  public function create(){
    return view('dashboard.seminars.create');
  }

  //Add seminar post
  public function add(Request $request){
    $seminar = new seminar;
    $seminar->title = $request->title;
    $seminar->user_id = $request->user_id;
    $seminar->begin = $request->begin;
    $seminar->end = $request->end;
    $seminar->description = $request->description;
    $seminar->user_id = Auth::user()->id;
    $seminar->save();
    return redirect('/Dashboard/seminars');
  }

  //Delete seminar
  public function delete(Request $request){
    $seminar = seminar::where('id','=',$request->id)->first();
    $seminar->delete();
    return redirect()->back();
  }

  //Update seminar form
  public function update($id){
    $seminar = seminar::where('id','=',$id)->first();
    $data=[
      'seminar' => $seminar,
    ];
    return view('dashboard.seminars.update')->with($data);
  }

  //Update seminar post
  public function updat(Request $request){
    $seminar = seminar::where('id','=',$request->id)->first();
    $seminar->title = $request->title;
    $seminar->user_id = $request->user_id;
    $seminar->begin = $request->begin;
    $seminar->end = $request->end;
    $seminar->description = $request->description;

    $seminar->save();
    return redirect('/Dashboard/seminars');
  }

  //Show seminar
  public function show($id){
    $seminar = seminar::where('id','=',$id)->first();
    $data=[
      'seminar' => $seminar,
    ];
    return view('dashboard.seminars.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_seminars' => seminar::all()->count(),
    ];
    return view('dashboard.seminars.statistics')->with($data);
  }
}
