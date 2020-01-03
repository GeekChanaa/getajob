@extends('layouts.dashboard')


@section('content')


<div class="">
  <span>name</span>
  <span>{{$group->name}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$group->visibility}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$group->description}}</span>
</div>
<div class="">
  <span>name</span>
  <span>{{$group->rules}}</span>
</div>


@endsection
