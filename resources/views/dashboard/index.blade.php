@extends('layouts.dashboard')




@section('content')


<div class="">
    <h1>Countries</h1>
    <a href="{{url('/Dashboard/countries')}}">Listing of countries</a>
    <a href="{{url('/Dashboard/countries/create')}}">Create Country</a>
</div>

<div class="">
    <h1>Cities</h1>
    <a href="{{url('/Dashboard/cities')}}">Listing of cities</a>
    <a href="{{url('/Dashboard/cities/create')}}">Create new city</a>
</div>

<div class="">
    <h1>Enterprises</h1>
    <a href="{{url('/Dashboard/enterprises')}}">Listing of enterprises</a>
    <a href="{{url('/Dashboard/enterprises/create')}}">Create new enterprise</a>
</div>

<div class="">
    <h1>Schools</h1>
    <a href="{{url('/Dashboard/schools')}}">Listing of schools</a>
    <a href="{{url('/Dashboard/schools/create')}}">Create new school</a>
</div>

<div class="">
    <h1>Users</h1>
    <a href="{{url('/Dashboard/users')}}">Listing of users</a>
</div>

<div class="">
    <h1>Skills</h1>
    <a href="{{url('/Dashboard/skills')}}">Listing of skills</a>
    <a href="{{url('/Dashboard/skills/create')}}">Create new Skill</a>
</div>

<div class="">
    <h1>Languages</h1>
    <a href="{{url('/Dashboard/languages')}}">Listing of languages</a>
    <a href="{{url('/Dashboard/languages/create')}}">Create new language</a>
</div>

<div class="">
    <h1>Certifications</h1>
    <a href="{{url('/Dashboard/certifications')}}">Listing of certifications</a>
    <a href="{{url('/Dashboard/certifications/create')}}">Create new certifications</a>
</div>

<div class="">
    <h1>Groups</h1>
    <a href="{{url('/Dashboard/groups')}}">Listing of groups</a>
</div>

<div class="">
    <h1>Pages</h1>
    <a href="{{url('/Dashboard/pages')}}">Listing of pages</a>
</div>

<div class="">
    <h1>Seminars</h1>
    <a href="{{url('/Dashboard/seminars')}}">Listing of seminars</a>
    <a href="{{url('/Dashboard/seminars/create')}}">Create seminar</a>
</div>

<div class="">
    <h1>Trainings</h1>
    <a href="{{url('/Dashboard/trainings')}}">Listing of trainings</a>
    <a href="{{url('/Dashboard/trainings/create')}}">Create trainings</a>
</div>

<div class="">
    <h1>Fucntions</h1>
    <a href="{{url('/Dashboard/jfunctions')}}">Listing of functions</a>
    <a href="{{url('/Dashboard/jfunctions/create')}}">Create function</a>
</div>



@endsection
