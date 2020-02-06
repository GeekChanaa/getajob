@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/certifications/update')}}" method="post">
  <h1>Update a certification</h1>
  <div class="line"></div>
{{csrf_field()}}
<div class="form-field">
  <label>Name</label>
  <input type="text" name="name" value="{{$certification->name}}">
  <input type="hidden" name="id" value="{{$certification->id}}">
</div>
<div class="form-field">
  <label>Description </label>
  <input type="text" name="description" value="{{$certification->description}}">
</div>

<button type="submit" name="button">Update</button>
</form>


@endsection
