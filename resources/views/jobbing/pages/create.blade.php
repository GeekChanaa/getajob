@extends('layouts.main')






@section('content')


<form class="form" action="{{url('/feed/add_page')}}" method="post">
@csrf
<div class="left-side">
</div>
<div class="right-side">
  <h1>Create a page</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>Name</label>
    <input type="text" name="name">
  </div>
  <div class="form-field">
    <label>Presentation</label>
    <input type="text" name="presentation">
  </div>
  <div class="form-field">
    <label>Website</label>
    <input type="text" name="site_web">
  </div>
  <div class="form-field">
    <label>Sector</label>
    <input type="text" name="sector">
  </div>
  <div class="form-field">
    <label>Entreprise type</label>
    <input type="text" name="enterprise_type">
  </div>
  <div class="form-field">
    <label>Visibility</label>
    <input type="number" max="2" name="visibility">
  </div>
  <div class="form-button">
    <button type="submit">Create</button>
  </div>
</div>
</form>




@endsection
