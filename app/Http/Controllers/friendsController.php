<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;

class friendsController extends Controller
{
    //Find someone view
    public function profiles(){
      if(isset($_GET['search'])){
        $list_users = User::where('name','like','%'.$_GET['search'].'%')->get();
      }
      else{
        $list_users = User::all();
      }
      $data=[
        'list_users' => $list_users,
      ];
      return view('jobbing.friends.friends')->with($data);
    }
}
