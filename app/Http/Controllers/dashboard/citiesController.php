<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\country;
use App\city;

class citiesController extends Controller
{
    //Listing Cities
    public function list(){
      $data=[
        'list_cities' => city::all(),
      ];
      return view('dashboard.cities.list')->with($data);
    }

    //Create form city
    public function create(){
      $data=[
        'list_countries' => country::all(),
      ];
      return view('dashboard.cities.create')->with($data);
    }

    //Add city post
    public function add(Request $request){
      $city = new city;
      $city->name = $request->name;
      $city->country_id = $request->country_id;
      $city->save();
      return redirect('/Dashboard/cities');
    }

    //Delete city
    public function delete(Request $request){
      $city = city::where('id','=',$request->id)->first();
      $city->delete();
      return redirect()->back();
    }

    //Update city form
    public function update($id){
      $city = city::where('id','=',$id)->first();
      $data=[
        'city' => $city,
        'list_countries' => country::all(),
      ];
      return view('dashboard.cities.update')->with($data);
    }

    //Update city post
    public function updat(Request $request){
      $city = city::where('id','=',$request->id)->first();
      $city->name = $request->name;
      $city->country_id = $request->country_id;
      $city->save();
      return redirect('/Dashboard/cities');
    }

    //Statistics views
    public function statistics(){
      $data=[
        'nbr_cities' => city::all()->count(),
      ];
      return view('dashboard.cities.statistics')->with($data);
    }


}
