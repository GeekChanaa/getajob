@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/trainings/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>title : </span> <input type="text" name="title">
</div>
<div class="">
  <span>diplomat : </span> <input type="text" name="diplomat">
</div>
<div class="">
  <span>description : </span> <input type="text" name="description">
</div>
<div class="">
  <span>conditions : </span> <input type="text" name="conditions">
</div>
<div class="">
  <span>phone : </span> <input type="text" name="phone">
</div>
<div class="">
  <span>email : </span> <input type="text" name="email">
</div>
<div class="">
  <span>school : </span> <input type="text" name="school">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
