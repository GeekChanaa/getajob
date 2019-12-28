<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\country;

class countriesController extends Controller
{
    //Listing of countries

    public function list(){
      $data=[
        'list_countries' => country::all(),
      ];
      return view('dashboard.countries.list');
    }

    //Create form country
    public function create(){
      return view('dashboard.cities.create');
    }

    //Add country post
    public function add(Request $request){
      $country = new country;
      $country->name = $request->name;
      $country->iso3 = $request->iso3;
      $country->iso2 = $request->iso2;
      $country->phonecode = $request->phonecode;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->save();
      return redirect('/Dashboard/countries');
    }

    //Delete country
    public function delete(Request $request){
      $country = country::where('id','=',$request->id)->first();
      $country->delete();
      return redirect()->back();
    }

    //Update country form
    public function update($id){
      $country = country::where('id','=',$request->id)->first();
      $data=[
        'country' => $country,
      ];
      return view('dashboard.countries.update')->with($data);
    }

    //Update country post
    public function updat(Request $request){
      $country = country::where('id','=',$request->id)->first();
      $country->name = $request->name;
      $country->iso3 = $request->iso3;
      $country->iso2 = $request->iso2;
      $country->phonecode = $request->phonecode;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->save();
      return redirect('/Dashboard/countries');
    }
}
