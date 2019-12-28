@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/countries/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name">
</div>
<div class="">
  <span>iso3 : </span> <input type="text" name="iso3">
</div>
<div class="">
  <span>iso2 : </span> <input type="text" name="iso2">
</div>
<div class="">
  <span>phonecode : </span> <input type="text" name="phonecode">
</div>
<div class="">
  <span>capital : </span> <input type="text" name="capital">
</div>
<div class="">
  <span>currency : </span> <input type="text" name="currency">
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
