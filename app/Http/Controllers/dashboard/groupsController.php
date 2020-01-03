<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\group;

class groupsController extends Controller
{
  //Listing groups
  public function list(){
    $data=[
      'list_groups' => group::all(),
    ];
    return view('dashboard.groups.list')->with($data);
  }



  //Delete group
  public function delete(Request $request){
    $group = group::where('id','=',$request->id)->first();
    $group->delete();
    return redirect()->back();
  }

  //Update group form
  public function update($id){
    $group = group::where('id','=',$id)->first();
    $data=[
      'group' => $group,
    ];
    return view('dashboard.groups.update')->with($data);
  }

  //Update group post
  public function updat(Request $request){
    $group = group::where('id','=',$request->id)->first();
    $group->name = $request->name;
    $group->visibility = $request->visibility;
    $group->save();
    return redirect('/Dashboard/groups');
  }

  //Show group
  public function show($id){
    $group = group::where('id','=',$id)->first();
    $data=[
      'group' => $group,
    ];
    return view('dashboard.groups.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_groups' => group::all()->count(),
    ];
    return view('dashboard.groups.statistics')->with($data);
  }
}
