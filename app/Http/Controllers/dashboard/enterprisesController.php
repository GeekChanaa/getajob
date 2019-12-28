<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\enterprise;

class enterprisesController extends Controller
{
  //Listing enterprises
  public function list(){
    $data=[
      'list_enterprises' => enterprise::all(),
    ];
    return view('dashboard.enterprises.list')->with($data);
  }

  //Create form enterprise
  public function create(){
    return view('dashboard.enterprises.create');
  }

  //Add enterprise post
  public function add(Request $request){
    $enterprise = new enterprise;
    $enterprise->name = $request->name;
    $enterprise->industry = $request->industry;
    $enterprise->founded = $request->founded;
    $enterprise->founders = $request->founders;
    $enterprise->headquarters = $request->headquarters;
    $enterprise->area_served = $request->area_served;
    $enterprise->key_people = $request->key_people;
    $enterprise->products = $request->products;
    $enterprise->revenue = $request->revenue;
    $enterprise->operating_income = $request->operating_income;
    $enterprise->net_income = $request->net_income;
    $enterprise->total_assets = $request->total_assets;
    $enterprise->nbr_employees = $request->nbr_employees;
    $enterprise->parent = $request->parent;
    $enterprise->website = $request->website;
    $enterprise->save();
    return redirect('/Dashboard/enterprises');
  }

  //Delete enterprise
  public function delete(Request $request){
    $enterprise = enterprise::where('id','=',$request->id)->first();
    $enterprise->delete();
    return redirect()->back();
  }

  //Update enterprise form
  public function update($id){
    $enterprise = enterprise::where('id','=',$request->id)->first();
    $data=[
      'enterprise' => $enterprise,
    ];
    return view('dashboard.enterprises.update')->with($data);
  }

  //Update enterprise post
  public function updat(Request $request){
    $enterprise = enterprise::where('id','=',$request->id)->first();
    $enterprise->name = $request->name;
    $enterprise->industry = $request->industry;
    $enterprise->founded = $request->founded;
    $enterprise->founders = $request->founders;
    $enterprise->headquarters = $request->headquarters;
    $enterprise->area_served = $request->area_served;
    $enterprise->key_people = $request->key_people;
    $enterprise->products = $request->products;
    $enterprise->revenue = $request->revenue;
    $enterprise->operating_income = $request->operating_income;
    $enterprise->net_income = $request->net_income;
    $enterprise->total_assets = $request->total_assets;
    $enterprise->nbr_employees = $request->nbr_employees;
    $enterprise->parent = $request->parent;
    $enterprise->website = $request->website;
    $enterprise->save();
    return redirect('/Dashboard/enterprises');
  }

  //Show enterprise
  public function show($id){
    $enterprise = enterprise::where('id','=',$d)->first();
    $data=[
      'enterprise' => $enterprise,
    ];
    return view('dashboard.enterprises.show')->with($data);
  }
}
