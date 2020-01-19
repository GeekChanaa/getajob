@extends('layouts.main')






@section('content')


<form class="form" action="{{url('/feed/add_seminar')}}" method="post">
@csrf
<div class="left-side">
</div>
<div class="right-side">
  <h1>Create a seminar</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>title</label>
    <input type="text" name="title">
  </div>
  <div class="form-field">
    <label>begin time</label>
    <input type="date" name="begin">
  </div>
  <div class="form-field">
    <label>end time</label>
    <input type="date" name="end">
  </div>
  <div class="form-field">
    <label>description</label>
    <input type="text" name="description">
  </div>

  <div class="form-button">
    <button type="submit">Create</button>
  </div>
</div>
</form>




@endsection
