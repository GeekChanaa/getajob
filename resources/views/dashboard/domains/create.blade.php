@extends('layouts.dashboard')



@section('content')



<form class="db-form" action="{{url('/Dashboard/domains/add')}}" method="post">
{{csrf_field()}}
<h1>Create a Domain</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">

<button type="submit" name="button">Create</button>
</form>


@endsection
