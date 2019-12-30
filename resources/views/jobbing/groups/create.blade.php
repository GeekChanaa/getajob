@extends('layouts.main')






@section('content')


<form class="" action="{{url('/feed/add_group')}}" method="post">
@csrf
<div class="">
  <span>name</span>
  <input type="text" name="name">
</div>
<div class="">
  <span>description</span>
  <input type="text" name="description">
</div>
<div class="">
  <span>rules</span>
  <input type="text" name="rules">
</div>
<div class="">
  <span>visibility</span>
  <input type="number" max="2" name="visibility">
</div>
<div class="">
  <button type="submit"> Create Group </button>
</div>
</form>




@endsection
