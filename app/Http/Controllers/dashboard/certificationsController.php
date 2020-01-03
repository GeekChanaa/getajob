<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\certification;

class certificationsController extends Controller
{
  //Listing certifications
  public function list(){
    $data=[
      'list_certifications' => certification::all(),
    ];
    return view('dashboard.certifications.list')->with($data);
  }

  //Create form certification
  public function create(){
    return view('dashboard.certifications.create');
  }

  //Add certification post
  public function add(Request $request){
    $certification = new certification;
    $certification->name = $request->name;
    $certification->description = $request->description;
    $certification->save();
    return redirect('/Dashboard/certifications');
  }

  //Delete certification
  public function delete(Request $request){
    $certification = certification::where('id','=',$request->id)->first();
    $certification->delete();
    return redirect()->back();
  }

  //Update certification form
  public function update($id){
    $certification = certification::where('id','=',$id)->first();
    $data=[
      'certification' => $certification,
    ];
    return view('dashboard.certifications.update')->with($data);
  }

  //Update certification post
  public function updat(Request $request){
    $certification = certification::where('id','=',$request->id)->first();
    $certification->name = $request->name;
    $certification->description = $request->description;
    $certification->save();
    return redirect('/Dashboard/certifications');
  }

  //Show certification
  public function show($id){
    $certification = certification::where('id','=',$id)->first();
    $data=[
      'certification' => $certification,
    ];
    return view('dashboard.certifications.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_certifications' => certification::all()->count(),
    ];
    return view('dashboard.certifications.statistics')->with($data);
  }
}
