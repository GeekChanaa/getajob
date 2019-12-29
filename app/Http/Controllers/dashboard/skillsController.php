<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\skill;

class skillsController extends Controller
{
  //Listing skills
  public function list(){
    $data=[
      'list_skills' => skill::all(),
    ];
    return view('dashboard.skills.list')->with($data);
  }

  //Create form skill
  public function create(){
    return view('dashboard.skills.create');
  }

  //Add skill post
  public function add(Request $request){
    $skill = new skill;
    $skill->name = $request->name;
    $skill->save();
    return redirect('/Dashboard/skills');
  }

  //Delete skill
  public function delete(Request $request){
    $skill = skill::where('id','=',$request->id)->first();
    $skill->delete();
    return redirect()->back();
  }

  //Update skill form
  public function update($id){
    $skill = skill::where('id','=',$request->id)->first();
    $data=[
      'skill' => $skill,
    ];
    return view('dashboard.skills.update')->with($data);
  }

  //Update skill post
  public function updat(Request $request){
    $skill = skill::where('id','=',$request->id)->first();
    $skill->name = $request->name;
    $skill->save();
    return redirect('/Dashboard/skills');
  }

  //Show skill
  public function show($id){
    $skill = skill::where('id','=',$d)->first();
    $data=[
      'skill' => $skill,
    ];
    return view('dashboard.skills.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_skills' => skill::all()->count(),
    ];
    return view('dashboard.skills.statistics')->with($data);
  }
}
