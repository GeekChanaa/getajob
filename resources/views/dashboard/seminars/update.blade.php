@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/seminars/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>title : </span> <input type="text" name="title" value="{{$seminar->title}}">
</div>
<div class="">
  <span>begin time: </span> <input type="date" name="begin" value="{{$seminar->begin}}">
</div>
<div class="">
  <span>end time: </span> <input type="date" name="end" value="{{$seminar->end}}">
</div>
<div class="">
  <span>description : </span> <input type="text" name="description" value="{{$seminar->description}}">
</div>
<input type="hidden"  name="id" value="{{$seminar->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
