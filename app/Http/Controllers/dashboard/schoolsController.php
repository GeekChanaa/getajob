<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\school;
use App\country;

class schoolsController extends Controller
{
  //Listing schools
  public function list(){
    $data=[
      'list_schools' => school::all(),
    ];
    return view('dashboard.schools.list')->with($data);
  }

  //Create form school
  public function create(){
    $data=[
      'list_countries' => country::all(),
    ];
    return view('dashboard.schools.create')->with($data);
  }

  //Add school post
  public function add(Request $request){
    $school = new school;
    $school->name = $request->name;
    $school->motto = $request->motto;
    $school->former_names = $request->former_names;
    $school->type = $request->type;
    $school->founded = $request->founded;
    $school->endowment = $request->endowment;
    $school->president = $request->president;
    $school->academic_staff = $request->academic_staff;
    $school->students = $request->students;
    $school->undergraduates = $request->undergraduates;
    $school->postgraduates = $request->postgraduates;
    $school->city_id = $request->city_id;
    $school->country_id = $request->country_id;
    $school->website = $request->website;
    $school->save();
    return redirect('/Dashboard/schools');
  }

  //Delete school
  public function delete(Request $request){
    $school = school::where('id','=',$request->id)->first();
    $school->delete();
    return redirect()->back();
  }

  //Update school form
  public function update($id){
    $school = school::where('id','=',$request->id)->first();
    $data=[
      'school' => $school,
    ];
    return view('dashboard.schools.update')->with($data);
  }

  //Update school post
  public function updat(Request $request){
    $school = school::where('id','=',$request->id)->first();
    $school->name = $request->name;
    $school->motto = $request->motto;
    $school->former_names = $request->former_names;
    $school->type = $request->type;
    $school->founded = $request->founded;
    $school->endowment = $request->endowment;
    $school->president = $request->president;
    $school->academic_staff = $request->academic_staff;
    $school->students = $request->students;
    $school->undergraduates = $request->undergraduates;
    $school->postgraduates = $request->postgraduates;
    $school->city_id = $request->city_id;
    $school->country_id = $request->country_id;
    $school->website = $request->website;
    $school->save();
    return redirect('/Dashboard/schools');
  }

  //Show school
  public function show($id){
    $school = school::where('id','=',$d)->first();
    $data=[
      'school' => $school,
    ];
    return view('dashboard.schools.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_schools' => school::all()->count(),
    ];
    return view('dashboard.schools.statistics')->with($data);
  }
}
