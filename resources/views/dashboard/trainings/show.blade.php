@extends('layouts.dashboard')


@section('content')


<div class="">
  <span>title</span>
  <span>{{$training->title}}</span>
</div>
<div class="">
  <span>diplomat</span>
  <span>{{$training->diplomat}}</span>
</div>
<div class="">
  <span>description</span>
  <span>{{$training->description}}</span>
</div>
<div class="">
  <span>conditions</span>
  <span>{{$training->conditions}}</span>
</div>
<div class="">
  <span>phone</span>
  <span>{{$training->phone}}</span>
</div>
<div class="">
  <span>email</span>
  <span>{{$training->email}}</span>
</div>
<div class="">
  <span>school</span>
  <span>{{$training->school}}</span>
</div>
<div class="">
  <span>user_id</span>
  <span>{{$training->user_id}}</span>
</div>



@endsection
