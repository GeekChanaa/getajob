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



@endsection
