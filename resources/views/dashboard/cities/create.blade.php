@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/cities/add')}}" method="post">
{{csrf_field()}}
<h1>Create a city</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>
<div class="form-field">
  <label>Country</label>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
