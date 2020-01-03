@extends('layouts.dashboard')


@section('content')


<div class="">
  <span>name</span>
  <span>{{$post->user->name}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$post->content}}</span>
</div>


@endsection
