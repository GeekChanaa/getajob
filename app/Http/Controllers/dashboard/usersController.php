<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\country;

class usersController extends Controller
{
  //Listing Users
  public function list(){
    $data=[
      'list_users' => User::all(),
    ];
    return view('dashboard.users.list')->with($data);
  }



  //Delete User
  public function delete(Request $request){
    $user = User::where('id','=',$request->id)->first();
    $user->delete();
    return redirect()->back();
  }

  //Update User form
  public function update($id){
    $user = User::where('id','=',$id)->first();
    $data=[
      'list_countries' => country::all(),
      'user' => $user,
    ];
    return view('dashboard.users.update')->with($data);
  }

  //Update User post
  public function updat(Request $request){
    $user = User::where('id','=',$request->id)->first();
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->country_id = $request->country_id;
    $user->city_id = $request->city_id;
    $user->save();
    return redirect('/Dashboard/users');
  }

  //Show User
  public function show($id){
    $user = User::where('id','=',$id)->first();
    $data=[
      'user' => $user,
    ];
    return view('dashboard.users.show')->with($data);
  }

  //Statistics views
  public function statistics(){
    $data=[
      'nbr_users' => User::all()->count(),
    ];
    return view('dashboard.users.statistics')->with($data);
  }
}
