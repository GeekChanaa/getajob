@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/seminars/add')}}" method="post">
{{csrf_field()}}
<h1>Create a seminar</h1>
<div class="line"></div>
<div class="form-field"></div>
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

<button type="submit" name="button">Create</button>
</form>


@endsection
