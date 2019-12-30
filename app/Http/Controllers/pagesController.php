<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\page;

class pagesController extends Controller
{
    //Create page form
    public function create(){
      return view('jobbing.pages.create');
    }

    // Add page
    public function add(Request $request){
      $page= new page;
      $page->name = $request->name;
      $page->presentation = $request->presentation;
      $page->site_web = $request->site_web;
      $page->sector = $request->sector;
      $page->enterprise_type = $request->enterprise_type;
      $page->save();
      return redirect('/feed');
    }
}
