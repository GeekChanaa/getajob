@extends('layouts.dashboard')


@section('content')


<div class="">
  <span>name</span>
  <span>{{$seminar->title}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$seminar->user_id}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$seminar->begin}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$seminar->end}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$seminar->description}}</span>
</div>


@endsection
