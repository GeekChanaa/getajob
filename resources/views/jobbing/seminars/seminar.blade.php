@extends('layouts.main')


@section('content')

<div class="seminar-infos">
  <div class="seminar-header">
    <div class="">
      <span>{{$seminar->title}}</span>
    </div>
    <div class="">
      <span>{{$seminar->description}}</span>
    </div>
  </div>
  <div class="">
    <span>{{explode($seminar->begin)[Ø]}}</span>
  </div>
  <div class="">
    <span>{{explode($seminar->end)[Ø]}}</span>
  </div>
  <div class="">
    <span>{{$seminar->user_id}}</span>
  </div>
</div>


@endsection
