@extends('layouts.dashboard')




@section('content')


<div class="">
  <span>ID</span>
  <span>{{$school->id}}</span>
</div>

<div class="">
  <span>name</span>
  <span>{{$school->name}}</span>
</div>

<div class="">
  <span>industry</span>
  <span>{{$school->motto}}</span>
</div>

<div class="">
  <span>founded</span>
  <span>{{$school->former_names}}</span>
</div>

<div class="">
  <span>founders</span>
  <span>{{$school->type}}</span>
</div>


<div class="">
  <span>headquarters</span>
  <span>{{$school->founded}}</span>
</div>

<div class="">
  <span>area_served</span>
  <span>{{$school->endowment}}</span>
</div>

<div class="">
  <span>key_people</span>
  <span>{{$school->president}}</span>
</div>

<div class="">
  <span>products</span>
  <span>{{$school->academic_staff}}</span>
</div>

<div class="">
  <span>revenue</span>
  <span>{{$school->students}}</span>
</div>

<div class="">
  <span>operating_income</span>
  <span>{{$school->undergraduates}}</span>
</div>

<div class="">
  <span>net_income</span>
  <span>{{$school->postgraduates}}</span>
</div>

<div class="">
  <span>total_assets</span>
  <span>{{$school->city_id}}</span>
</div>

<div class="">
  <span>nbr_employees</span>
  <span>{{$school->country_id}}</span>
</div>

<div class="">
  <span>parent</span>
  <span>{{$school->website}}</span>
</div>







@endsection
