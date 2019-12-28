@extends('layouts.dashboard')




@section('content')


<div class="">
  <span>ID</span>
  <span>{{$enterprise->id}}</span>
</div>

<div class="">
  <span>name</span>
  <span>{{$enterprise->name}}</span>
</div>

<div class="">
  <span>industry</span>
  <span>{{$enterprise->industry}}</span>
</div>

<div class="">
  <span>founded</span>
  <span>{{$enterprise->founded}}</span>
</div>

<div class="">
  <span>founders</span>
  <span>{{$enterprise->founders}}</span>
</div>


<div class="">
  <span>headquarters</span>
  <span>{{$enterprise->headquarters}}</span>
</div>

<div class="">
  <span>area_served</span>
  <span>{{$enterprise->area_served}}</span>
</div>

<div class="">
  <span>key_people</span>
  <span>{{$enterprise->key_people}}</span>
</div>

<div class="">
  <span>products</span>
  <span>{{$enterprise->products}}</span>
</div>

<div class="">
  <span>revenue</span>
  <span>{{$enterprise->revenue}}</span>
</div>

<div class="">
  <span>operating_income</span>
  <span>{{$enterprise->operating_income}}</span>
</div>

<div class="">
  <span>net_income</span>
  <span>{{$enterprise->net_income}}</span>
</div>

<div class="">
  <span>total_assets</span>
  <span>{{$enterprise->total_assets}}</span>
</div>

<div class="">
  <span>nbr_employees</span>
  <span>{{$enterprise->nbr_employees}}</span>
</div>

<div class="">
  <span>parent</span>
  <span>{{$enterprise->parent}}</span>
</div>

<div class="">
  <span>website</span>
  <span>{{$enterprise->website}}</span>
</div>







@endsection
