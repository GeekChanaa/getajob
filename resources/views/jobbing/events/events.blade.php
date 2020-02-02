@extends('layouts.main')


@section('content')

@foreach($list_events as $event)
<div class="">
  <span>name</span> <span>{{$event->name}}</span> <br>
  <span>user</span> <span>{{$event->user_id}}</span> <br>
  <span>country</span> <span></span>{{$event->country_id}} <br>
  <span>city</span> <span>{{$event->city_id}}</span> <br>
  <span>adress</span> <span>{{$event->adress}}</span> <br>
  <span>description</span> <span>{{$event->description}}</span> <br>
  <span>begin_time</span> <span>{{$event->begin_time}}</span> <br>
  <span>finish_time</span> <span>{{$event->finish_time}}</span> <br>
  <span>type</span> <span>{{$event->type}}</span> <br>
</div>
@endforeach



@endsection
