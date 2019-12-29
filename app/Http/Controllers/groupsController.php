<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;

class groupsController extends Controller
{
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
