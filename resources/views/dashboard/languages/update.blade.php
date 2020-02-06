@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/languages/update')}}" method="post">
{{csrf_field()}}
<h1>Update a language</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name" value="{{$language->name}}">
  <input type="hidden" name="id" value="{{$language->id}}">
</div>

<button type="submit" name="button">Update</button>
</form>


@endsection
