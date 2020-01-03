@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/cities/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$city->name}}">
</div>
<div class="">
  <span>Country : </span>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
      <option @if($country->id == $city->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<input type="hidden"  name="id" value="{{$city->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
