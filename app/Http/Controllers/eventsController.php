<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\country;
use App\city;

class eventsController extends Controller
{
  //Create training form
  public function create(){
    $data=[
      'list_countries' => country::all(),
    ];
    return view('jobbing.events.create')->with($data);
  }

  //add training
  public function add(Request $request){
    $event = new event;
    $event->name = $request->name;
    $event->country_id = $request->country_id;
    $event->city_id = $request->city_id;
    $event->adress = $request->adress;
    $event->description = $request->description;
    $event->begin_time = $request->begin_time;
    $event->finish_time = $request->finish_time;
    $event->type = $request->type;
    $event->save();
    return redirect('/feed');
  }
}
