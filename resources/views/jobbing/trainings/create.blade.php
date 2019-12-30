@extends('layouts.main')






@section('content')


<form class="" action="{{url('/feed/add_training')}}" method="post">
@csrf
<div class="">
  <span>title</span>
  <input type="text" name="title">
</div>
<div class="">
  <span>diplomat</span>
  <input type="text" name="diplomat">
</div>
<div class="">
  <span>description</span>
  <input type="text" name="description">
</div>
<div class="">
  <span>conditions</span>
  <input type="text" name="conditions">
</div>
<div class="">
  <span>phone</span>
  <input type="text" name="phone">
</div>
<div class="">
  <span>email</span>
  <input type="text" name="email">
</div>
<div class="">
  <span>school</span>
  <input type="text" name="school">
</div>
<div class="">
  <button type="submit"> Create training </button>
</div>
</form>




@endsection
