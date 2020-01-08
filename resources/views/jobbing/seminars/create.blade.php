@extends('layouts.main')






@section('content')


<form class="" action="{{url('/feed/add_seminar')}}" method="post">
@csrf
<div class="">
  <span>title</span>
  <input type="text" name="title">
</div>
<div class="">
  <span>begin time</span>
  <input type="date" name="begin">
</div>
<div class="">
  <span>end time</span>
  <input type="date" name="end">
</div>
<div class="">
  <span>description</span>
  <input type="text" name="description">
</div>

<div class="">
  <button type="submit"> Create seminar </button>
</div>
</form>




@endsection
