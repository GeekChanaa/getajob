<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\event;

class eventsController extends Controller
{
  //Listing events
  public function list(){
    $data=[
      'list_events' => event::all(),
    ];
    return view('dashboard.events.list')->with($data);
  }



  //Delete event
  public function delete(Request $request){
    $event = event::where('id','=',$request->id)->first();
    $event->delete();
    return redirect()->back();
  }

  //Update event form
  public function update($id){
    $event = event::where('id','=',$id)->first();
    $data=[
      'event' => $event,
    ];
    return view('dashboard.events.update')->with($data);
  }

  //Update event post
  public function updat(Request $request){
    $event = event::where('id','=',$request->id)->first();
    $event->name = $request->name;
    $event->user_id = $request->user_id;
    $event->country_id = $request->country_id;
    $event->city_id = $request->city_id;
    $event->adress = $request->adress;
    $event->description = $request->description;
    $event->begin_time = $request->begin_time;
    $event->finish_time = $request->finish_time;
    $event->type = $request->type;
    $event->save();
    return redirect('/Dashboard/events');
  }

  //Show event
  public function show($id){
    $event = event::where('id','=',$id)->first();
    $data=[
      'event' => $event,
    ];
    return view('dashboard.events.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_events' => event::all()->count(),
    ];
    return view('dashboard.events.statistics')->with($data);
  }
}
