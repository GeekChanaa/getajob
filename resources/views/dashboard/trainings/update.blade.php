@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/trainings/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>title : </span> <input type="text" name="title" value="{{$training->title}}">
</div>
<div class="">
  <span>diplomat : </span> <input type="text" name="diplomat" value="{{$training->diplomat}}">
</div>
<div class="">
  <span>description : </span> <input type="text" name="description" value="{{$training->description}}">
</div>
<div class="">
  <span>conditions : </span> <input type="text" name="conditions" value="{{$training->conditions}}">
</div>
<div class="">
  <span>phone : </span> <input type="text" name="phone" value="{{$training->phone}}">
</div>
<div class="">
  <span>email : </span> <input type="text" name="email" value="{{$training->email}}">
</div>
<div class="">
  <span>school : </span> <input type="text" name="school" value="{{$training->school}}">
</div>
<input type="hidden"  name="id" value="{{$training->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
