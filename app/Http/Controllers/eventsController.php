<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use App\country;
use App\city;
use App\event_like;
use App\event_interest;
use auth;

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
    $event->user_id = Auth::user()->id;
    $event->save();
    return redirect('/feed');
  }

  // like an event
  public function likeevent(Request $request){
    $event_like = new event_like;
    $event_like->user_id = Auth::user()->id;
    $event_like->event_id = $request->event_id;
    $event_like->save();
  }

  // Interested in event
  public function interestedInEvent(Request $request){
    $event_interest = new event_interest;
    $event_interest->user_id = Auth::user()->id;
    $event_interest->event_id = $request->event_id;
    $event_interest->save();
  }
}
