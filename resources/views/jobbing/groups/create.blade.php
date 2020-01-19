@extends('layouts.main')






@section('content')


<form class="form" action="{{url('/feed/add_group')}}" method="post">
@csrf
<div class="left-side">
</div>
<div class="right-side">
  <h1>Create a group</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>name</label>
    <input type="text" name="name">
  </div>
  <div class="form-field">
    <label>description</label>
    <input type="text" name="description">
  </div>
  <div class="form-field">
    <label>rules</label>
    <input type="text" name="rules">
  </div>
  <div class="form-field">
    <label>visibility</label>
    <input type="number" max="2" name="visibility">
  </div>
  <div class="form-button">
    <button type="submit"> Create</button>
  </div>
</div>
</form>




@endsection
