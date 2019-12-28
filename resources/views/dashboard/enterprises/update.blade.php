@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/enterprises/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$enterprise->name}}">
</div>
<div class="">
  <span>industry : </span> <input type="text" name="industry" value="{{$enterprise->industry}}">
</div>

<div class="">
  <span>founded : </span> <input type="text" name="founded" value="{{$enterprise->founded}}">
</div>
<div class="">
  <span>founders : </span> <input type="text" name="founders" value="{{$enterprise->founders}}">
</div>
<div class="">
  <span>headquarters : </span> <input type="text" name="headquarters" value="{{$enterprise->headquarters}}">
</div>
<div class="">
  <span>area_served : </span> <input type="text" name="area_served" value="{{$enterprise->area_served}}">
</div>
<div class="">
  <span>key_people : </span> <input type="text" name="key_people" value="{{$enterprise->key_people}}">
</div>
<div class="">
  <span>products : </span> <input type="text" name="products" value="{{$enterprise->products}}">
</div>
<div class="">
  <span>revenue : </span> <input type="text" name="revenue" value="{{$enterprise->revenue}}">
</div>
<div class="">
  <span>operating_income : </span> <input type="text" name="operating_income" value="{{$enterprise->operating_income}}">
</div>
<div class="">
  <span>net_income : </span> <input type="text" name="net_income" value="{{$enterprise->net_income}}">
</div>
<div class="">
  <span>total_assets : </span> <input type="text" name="total_assets" value="{{$enterprise->total_assets}}">
</div>
<div class="">
  <span>nbr_employees : </span> <input type="text" name="nbr_employees" value="{{$enterprise->nbr_employees}}">
</div>
<div class="">
  <span>parent : </span> <input type="text" name="parent" value="{{$enterprise->parent}}">
</div>
<div class="">
  <span>website : </span> <input type="text" name="website" value="{{$enterprise->website}}">
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
