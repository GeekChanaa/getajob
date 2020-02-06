<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\country;
use App\city;
use App\enterprise;
use App\school;
use App\User;
use App\skill;
use App\language;
use App\certification;
use App\group;
use App\page;
use App\seminar;
use App\training;
use App\jfunction;

class dashboardController extends Controller
{
    //Index Page
    public function index(){
      $data=[
        'nbr_countries' => country::count(),
        'nbr_cities' => city::count(),
        'nbr_enterprises' => enterprise::count(),
        'nbr_schools' => school::count(),
        'nbr_users' => User::count(),
        'nbr_skills' => skill::count(),
        'nbr_languages' => language::count(),
        'nbr_certifications' => certification::count(),
        'nbr_groups' => group::count(),
        'nbr_pages' => page::count(),
        'nbr_seminars' => seminar::count(),
        'nbr_trainings' => training::count(),
        'nbr_functions' => jfunction::count(),
      ];
      return view('dashboard.index')->with($data);
    }
}
