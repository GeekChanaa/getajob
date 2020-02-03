@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/certifications/add')}}" method="post">
  <h1>Create a certification</h1>
  <div class="line"></div>
{{csrf_field()}}
<div class="form-field">
  <label>Name</label>
  <input type="text" name="name">
</div>
<div class="form-field">
  <label>Description </label>
  <input type="text" name="description">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
