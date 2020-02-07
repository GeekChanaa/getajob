<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;

class friendsController extends Controller
{
    //Find someone view
    public function profiles(){
      return view('jobbing.friends.friends');
    }
}
