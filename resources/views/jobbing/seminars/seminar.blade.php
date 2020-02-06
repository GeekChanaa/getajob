@extends('layouts.main')


@section('content')


<div class="">
  <span>title</span> <span>{{$seminar->title}}</span>
</div>
<div class="">
  <span>user_id</span> <span>{{$seminar->user_id}}</span>
</div>
<div class="">
  <span>begin</span> <span>{{$seminar->begin}}</span>
</div>
<div class="">
  <span>end</span> <span>{{$seminar->end}}</span>
</div>
<div class="">
  <span>description</span> <span>{{$seminar->description}}</span>
</div>


@endsection
