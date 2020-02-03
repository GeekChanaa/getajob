@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/trainings/add')}}" method="post">
  <h1>Create a training</h1>
  <div class="line"></div>
{{csrf_field()}}
<div class="form-field">
  <label>title</label>
  <input type="text" name="title">
</div>
<div class="form-field">
  <label>diplomat</label>
  <input type="text" name="diplomat">
</div>
<div class="form-field">
  <label>description</label>
  <input type="text" name="description">
</div>
<div class="form-field">
  <label>conditions</label>
  <input type="text" name="conditions">
</div>
<div class="form-field">
  <label>phone</label>
  <input type="text" name="phone">
</div>
<div class="form-field">
  <label>email</label>
  <input type="text" name="email">
</div>
<div class="form-field">
  <label>school</label>
  <input type="text" name="school">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
