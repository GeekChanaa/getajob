<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    //Index Page
    public function index(){
      return view('dashboard.index');
    }
}
