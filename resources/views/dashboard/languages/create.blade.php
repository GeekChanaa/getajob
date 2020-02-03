@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/languages/add')}}" method="post">
{{csrf_field()}}
<h1>Create a language</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
