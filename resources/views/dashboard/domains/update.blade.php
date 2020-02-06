@extends('layouts.dashboard')



@section('content')



<form class="db-form" action="{{url('/Dashboard/domains/update')}}" method="post">
{{csrf_field()}}
<h1>Update a Domain</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="hidden" name="id" value="{{$domain->id}}">
  <input type="text" name="name" value="{{$domain->name}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
