@extends('layouts.main')






@section('content')


<form class="" action="{{url('/feed/add_page')}}" method="post">
@csrf
<div class="">
  <span>name</span>
  <input type="text" name="name">
</div>
<div class="">
  <span>presentation</span>
  <input type="text" name="presentation">
</div>
<div class="">
  <span>Website</span>
  <input type="text" name="site_web">
</div>
<div class="">
  <span>sector</span>
  <input type="text" name="sector">
</div>
<div class="">
  <span>enterprise type</span>
  <input type="text" name="enterprise_type">
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
