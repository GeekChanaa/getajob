
@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/cities/update')}}" method="post">
{{csrf_field()}}
<h1>Create a city</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name" value="{{$city->name}}">
  <input type="hidden" name="id" value="{{$city->id}}">
</div>
<div class="form-field">
  <label>Country</label>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<button type="submit" name="button">Update</button>
</form>


@endsection
