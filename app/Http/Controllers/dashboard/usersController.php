<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    $user = User::where('id','=',$request->id)->first();
    $data=[
      'user' => $user,
    ];
    return view('dashboard.users.update')->with($data);
  }

  //Update User post
  public function updat(Request $request){
    $user = User::where('id','=',$request->id)->first();
    $user->name = $request->name;
    $user->phone = $request->industry;
    $user->email = $request->founded;
    $user->country_id = $request->founders;
    $user->city_id = $request->headquarters;
    $user->save();
    return redirect('/Dashboard/users');
  }

  //Show User
  public function show($id){
    $user = User::where('id','=',$d)->first();
    $data=[
      'user' => $user,
    ];
    return view('dashboard.users.show')->with($data);
  }
}
