@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/events/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$event->user_id}}">
</div>
<div class="">
  <span>country : </span> <input type="text" name="name" value="{{$event->country_id}}">
</div>
<div class="">
  <span>city : </span> <input type="text" name="name" value="{{$event->city_id}}">
</div>
<div class="">
  <span>adress : </span> <input type="text" name="name" value="{{$event->adress}}">
</div>
<div class="">
  <span>description : </span> <input type="text" name="name" value="{{$event->description}}">
</div>
<div class="">
  <span>Begin Time : </span> <input type="text" name="name" value="{{$event->begin_time}}">
</div>
<div class="">
  <span>Finish time : </span> <input type="text" name="name" value="{{$event->finish_time}}">
</div>
<div class="">
  <span>Type : </span> <input type="text" name="name" value="{{$event->type}}">
</div>
<input type="hidden"  name="id" value="{{$event->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
