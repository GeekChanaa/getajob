<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\volunteer_experience;
use App\user_language;
use App\user_course;
use App\patent;
use App\user_certification;
use App\user_project;
use App\language;

class profileController extends Controller
{
    //User interface
    public function user_interface(){
      $data=[
        'list_volunteer_experiences' => volunteer_experience::all(),
        'list_certifications' => user_certification::all(),
        'list_patents' => patent::all(),
        'list_courses' => user_course::all(),
        'list_projects' => user_project::all(),
        'list_languages' => user_language::all(),
        'languages' => language::all(),
      ];
      return view('jobbing.user_interface')->with($data);
    }
}
