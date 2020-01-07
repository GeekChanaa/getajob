<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;
use App\comment;
use App\reply;
use App\event;
use App\page;
use App\group;

class mainController extends Controller
{
    //Feed View
    public function feed(){
      $data=[
        'list_posts' => post::withCount(['likes','comments'])->get(),
        'list_pages' => page::all(),
        'list_groups' => group::all(),
        'list_events' => event::all(),
      ];
      return view('jobbing.feed')->with($data);
    }
}
