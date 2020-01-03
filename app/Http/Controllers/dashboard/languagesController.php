<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\language;

class languagesController extends Controller
{
  //Listing languages
  public function list(){
    $data=[
      'list_languages' => language::all(),
    ];
    return view('dashboard.languages.list')->with($data);
  }

  //Create form language
  public function create(){
    return view('dashboard.languages.create');
  }

  //Add language post
  public function add(Request $request){
    $language = new language;
    $language->name = $request->name;
    $language->save();
    return redirect('/Dashboard/languages');
  }

  //Delete language
  public function delete(Request $request){
    $language = language::where('id','=',$request->id)->first();
    $language->delete();
    return redirect()->back();
  }

  //Update language form
  public function update($id){
    $language = language::where('id','=',$id)->first();
    $data=[
      'language' => $language,
    ];
    return view('dashboard.languages.update')->with($data);
  }

  //Update language post
  public function updat(Request $request){
    $language = language::where('id','=',$request->id)->first();
    $language->name = $request->name;
    $language->save();
    return redirect('/Dashboard/languages');
  }

  //Show language
  public function show($id){
    $language = language::where('id','=',$id)->first();
    $data=[
      'language' => $language,
    ];
    return view('dashboard.languages.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_languages' => language::all()->count(),
    ];
    return view('dashboard.languages.statistics')->with($data);
  }
}
