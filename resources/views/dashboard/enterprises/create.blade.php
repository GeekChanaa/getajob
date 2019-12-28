@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/enterprises/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name">
</div>
<div class="">
  <span>industry : </span> <input type="text" name="industry">
</div>

<div class="">
  <span>founded : </span> <input type="text" name="founded">
</div>
<div class="">
  <span>founders : </span> <input type="text" name="founders">
</div>
<div class="">
  <span>headquarters : </span> <input type="text" name="headquarters">
</div>
<div class="">
  <span>area_served : </span> <input type="text" name="area_served">
</div>
<div class="">
  <span>key_people : </span> <input type="text" name="key_people">
</div>
<div class="">
  <span>products : </span> <input type="text" name="products">
</div>
<div class="">
  <span>revenue : </span> <input type="text" name="revenue">
</div>
<div class="">
  <span>operating_income : </span> <input type="text" name="operating_income">
</div>
<div class="">
  <span>net_income : </span> <input type="text" name="net_income">
</div>
<div class="">
  <span>total_assets : </span> <input type="text" name="total_assets">
</div>
<div class="">
  <span>nbr_employees : </span> <input type="text" name="nbr_employees">
</div>
<div class="">
  <span>parent : </span> <input type="text" name="parent">
</div>
<div class="">
  <span>website : </span> <input type="text" name="website">
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
