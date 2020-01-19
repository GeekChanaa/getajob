@extends('layouts.main')






@section('content')


<form class="form" action="{{url('/feed/add_event')}}" method="post">
@csrf
<div class="left-side">
</div>
<div class="right-side">
  <h1>Create an event</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>name</label>
    <input type="text" name="name">
  </div>
  <div class="form-field">
    <label>country</label>
    <select type="text" name="country_id">
      @foreach($list_countries as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-field">
    <label>city</label>
    <input type="text" name="city_id">
  </div>
  <div class="form-field">
    <label>adress</label>
    <input type="text" name="adress">
  </div>
  <div class="form-field">
    <label>description</label>
    <input type="text" name="description">
  </div>
  <div class="form-field">
    <label>begin_time</label>
    <input type="date" name="begin_time">
  </div>
  <div class="form-field">
    <label>finish_time</label>
    <input type="date" name="finish_time">
  </div>
  <div class="form-field">
    <label>type</label>
    <input type="number" name="type">
  </div>
  <div class="form-button">
    <button type="submit">Create</button>
  </div>
</div>
</form>




@endsection
