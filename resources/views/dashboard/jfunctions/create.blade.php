@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/jfunctions/add')}}" method="post">
{{csrf_field()}}
<h1>Create a job function</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
