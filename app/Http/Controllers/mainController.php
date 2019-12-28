<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;
use App\comment;
use App\reply;

class mainController extends Controller
{
    //Feed View
    public function feed(){
      $data=[
        'list_posts' => post::all(),
      ];
      return view('jobbing.feed')->with($data);
    }
}
