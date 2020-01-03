<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\jfunction;

class jfunctionsController extends Controller
{
  //Listing jfunctions
  public function list(){
    $data=[
      'list_jfunctions' => jfunction::all(),
    ];
    return view('dashboard.jfunctions.list')->with($data);
  }

  //Create form jfunction
  public function create(){
    return view('dashboard.jfunctions.create');
  }

  //Add jfunction post
  public function add(Request $request){
    $jfunction = new jfunction;
    $jfunction->name = $request->name;
    $jfunction->save();
    return redirect('/Dashboard/jfunctions');
  }

  //Delete jfunction
  public function delete(Request $request){
    $jfunction = jfunction::where('id','=',$request->id)->first();
    $jfunction->delete();
    return redirect()->back();
  }

  //Update jfunction form
  public function update($id){
    $jfunction = jfunction::where('id','=',$id)->first();
    $data=[
      'jfunction' => $jfunction,
    ];
    return view('dashboard.jfunctions.update')->with($data);
  }

  //Update jfunction post
  public function updat(Request $request){
    $jfunction = jfunction::where('id','=',$request->id)->first();
    $jfunction->name = $request->name;
    $jfunction->save();
    return redirect('/Dashboard/jfunctions');
  }

  //Show jfunction
  public function show($id){
    $jfunction = jfunction::where('id','=',$id)->first();
    $data=[
      'jfunction' => $jfunction,
    ];
    return view('dashboard.jfunctions.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_jfunctions' => jfunction::all()->count(),
    ];
    return view('dashboard.jfunctions.statistics')->with($data);
  }
}
