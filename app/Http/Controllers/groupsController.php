<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;
use App\post;

class groupsController extends Controller
{
    // Groups page
    public function groups(){
      $data=[
        'list_groups' => group::all(),
      ];
      return view('jobbing.groups.groups')->with($data);
    }

    // Group page
    public function group($id){
      $group = group::where('id','=',$id)->first();
      $data=[
        'group' => $group,
        'list_posts' => post::all(),
      ];
      return view('jobbing.groups.group')->with($data);
    }

    //Create Group form
    public function create(){
      return view('jobbing.groups.create');
    }

    //Add group
    public function add(Request $request){
      $group = new group;
      $group->name = $request->name;
      $group->description = $request->description;
      $group->rules = $request->rules;
      $group->visibility = $request->visibility;
      $group->save();
      return redirect('/feed');
    }
}
