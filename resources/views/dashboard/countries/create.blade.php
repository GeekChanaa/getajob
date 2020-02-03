@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/countries/add')}}" method="post">
{{csrf_field()}}
<h1>Create a country</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>
<div class="form-field">
  <label>iso3</label>
  <input type="text" name="iso3">
</div>
<div class="form-field">
  <label>iso2</label>
  <input type="text" name="iso2">
</div>
<div class="form-field">
  <label>phonecode</label>
  <input type="text" name="phonecode">
</div>
<div class="form-field">
  <label>Capital</label>
  <input type="text" name="capital">
</div>
<div class="form-field">
  <label>currency</label>
  <input type="text" name="currency">
</div>
<button type="submit" name="button">Create</button>
</form>


@endsection
