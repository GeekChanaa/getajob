@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/countries/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$country->name}}">
</div>
<div class="">
  <span>iso3 : </span> <input type="text" name="iso3" value="{{$country->iso3}}">
</div>
<div class="">
  <span>iso2 : </span> <input type="text" name="iso2" value="{{$country->iso2}}">
</div>
<div class="">
  <span>phonecode : </span> <input type="text" name="phonecode" value="{{$country->phonecode}}">
</div>
<div class="">
  <span>capital : </span> <input type="text" name="capital" value="{{$country->capital}}">
</div>
<div class="">
  <span>currency : </span> <input type="text" name="currency" value="{{$country->currency}}">
</div>
<input type="hidden"  name="id" value="{{$country->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
