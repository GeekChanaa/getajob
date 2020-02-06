@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/jfunctions/update')}}" method="post">
{{csrf_field()}}
<h1>Update a job function</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name" value="{{$jfunction->name}}">
  <input type="hidden" name="id" value="{{$jfunction->id}}">
</div>

<button type="submit" name="button">Update</button>
</form>


@endsection
