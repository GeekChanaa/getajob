<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain;

class domainController extends Controller
{
  //Listing domains
  public function list(){
    $data=[
      'list_domains' => domain::all(),
    ];
    return view('dashboard.domains.list')->with($data);
  }

  //Create form domain
  public function create(){
    return view('dashboard.domains.create');
  }

  //Add domain post
  public function add(Request $request){
    $domain = new domain;
    $domain->name = $request->name;
    $domain->save();
    return redirect('/Dashboard/domains');
  }

  //Delete domain
  public function delete(Request $request){
    $domain = domain::where('id','=',$request->id)->first();
    $domain->delete();
    return redirect()->back();
  }

  //Update domain form
  public function update($id){
    $domain = domain::where('id','=',$request->id)->first();
    $data=[
      'domain' => $domain,
    ];
    return view('dashboard.domains.update')->with($data);
  }

  //Update domain post
  public function updat(Request $request){
    $domain = domain::where('id','=',$request->id)->first();
    $domain->name = $request->name;
    $domain->save();
    return redirect('/Dashboard/domains');
  }

  //Show domain
  public function show($id){
    $domain = domain::where('id','=',$d)->first();
    $data=[
      'domain' => $domain,
    ];
    return view('dashboard.domains.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_domains' => domain::all()->count(),
    ];
    return view('dashboard.domains.statistics')->with($data);
  }
}
