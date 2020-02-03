@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/skills/add')}}" method="post">
  <h1>Create a skill</h1>
  <div class="line"></div>
{{csrf_field()}}
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
