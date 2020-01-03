<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\page;

class pagesController extends Controller
{
  //Listing pages
  public function list(){
    $data=[
      'list_pages' => page::all(),
    ];
    return view('dashboard.pages.list')->with($data);
  }

  //Delete page
  public function delete(Request $request){
    $page = page::where('id','=',$request->id)->first();
    $page->delete();
    return redirect()->back();
  }

  //Update page form
  public function update($id){
    $page = page::where('id','=',$id)->first();
    $data=[
      'page' => $page,
    ];
    return view('dashboard.pages.update')->with($data);
  }

  //Update page post
  public function updat(Request $request){
    $page = page::where('id','=',$request->id)->first();
    $page->name = $request->name;
    $page->presentation = $request->presentation;
    $page->site_web = $request->site_web;
    $page->sector = $request->sector;
    $page->enterprise_type = $request->enterprise_type;
    $page->save();
    return redirect('/Dashboard/pages');
  }

  //Show page
  public function show($id){
    $page = page::where('id','=',$id)->first();
    $data=[
      'page' => $page,
    ];
    return view('dashboard.pages.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_pages' => page::all()->count(),
    ];
    return view('dashboard.pages.statistics')->with($data);
  }
}
