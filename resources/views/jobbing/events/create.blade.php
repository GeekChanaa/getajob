@extends('layouts.main')






@section('content')


<form class="" action="{{url('/feed/add_event')}}" method="post">
@csrf
<div class="">
  <span>name</span>
  <input type="text" name="name">
</div>
<div class="">
  <span>country</span>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
    <option value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<div class="">
  <span>city</span>
  <input type="text" name="city_id">
</div>
<div class="">
  <span>adress</span>
  <input type="text" name="adress">
</div>
<div class="">
  <span>description</span>
  <input type="text" name="description">
</div>
<div class="">
  <span>begin_time</span>
  <input type="date" name="begin_time">
</div>
<div class="">
  <span>finish_time</span>
  <input type="date" name="finish_time">
</div>
<div class="">
  <span>type</span>
  <input type="number" name="type">
</div>
<div class="">
  <button type="submit"> Create event </button>
</div>
</form>




@endsection
