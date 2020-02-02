<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\page;
use App\page_like;
use App\pages_following;
use auth;

class pagesController extends Controller
{
    //Create page form
    public function create(){
      return view('jobbing.pages.create');
    }

    // page
    public function page($id){
      $page = page::where('id','=',$id)->first();
      $data=[
        'page' => $page,
      ];
      return view('jobbing.pages.page')->with($data);
    }

    //pages
    public function pages(){
      $data=[
        'list_pages' => page::all(),
      ];
      return view('jobbing.pages.pages')->with($data);
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

    // Follow page
    public function followPage(Request $request){
      $fp = new pages_following;
      $fp->user_id = Auth::user()->id;
      $fp->page_id = $request->page_id;
      $fp->save();
    }

    // Like page
    public function likePage(Request $request){
      $fp = new page_like;
      $fp->user_id = Auth::user()->id;
      $fp->page_id = $request->page_id;
      $fp->save();
    }
}
