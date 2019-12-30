<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\seminar;

class seminarsController extends Controller
{
    //Create seminar form
    public function create(){
      return view('jobbing.seminars.create');
    }

    //add seminar
    public function add(Request $request){
      $seminar = new seminar;
      $seminar->title = $request->title;
      $seminar->begin = $request->begin;
      $seminar->end = $request->end;
      $seminar->description = $request->description;
      $seminar->save();
      return redirect('/feed');
    }
}
