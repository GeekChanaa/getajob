@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/countries/update')}}" method="post">
{{csrf_field()}}
<h1>Update a country</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name" value="{{$country->name}}">
  <input type="hidden" name="id" value="{{$country->id}}">
</div>
<div class="form-field">
  <label>iso3</label>
  <input type="text" name="iso3" value="{{$country->iso3}}">
</div>
<div class="form-field">
  <label>iso2</label>
  <input type="text" name="iso2" value="{{$country->iso2}}">
</div>
<div class="form-field">
  <label>phonecode</label>
  <input type="text" name="phonecode" value="{{$country->phonecode}}">
</div>
<div class="form-field">
  <label>Capital</label>
  <input type="text" name="capital" value="{{$country->capital}}">
</div>
<div class="form-field">
  <label>currency</label>
  <input type="text" name="currency" value="{{$country->currency}}">
</div>
<button type="submit" name="button">Update</button>
</form>


@endsection
