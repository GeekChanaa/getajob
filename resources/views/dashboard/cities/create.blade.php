@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/cities/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name">
</div>
<div class="">
  <span>Country : </span>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
