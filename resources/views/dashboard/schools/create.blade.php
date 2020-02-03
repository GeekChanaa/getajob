@extends('layouts.dashboard')



@section('content')


<form class="db-form" action="{{url('/Dashboard/schools/add')}}" method="post">
{{csrf_field()}}
<h1>Create a school</h1>
<div class="line"></div>
<div class="form-field">
  <label>name</label>
  <input type="text" name="name">
</div>
<div class="form-field">
  <label>motto</label>
  <input type="text" name="motto">
</div>
<div class="form-field">
  <label>former_names</label>
  <input type="text" name="former_names">
</div>
<div class="form-field">
  <label>type</label>
  <input type="text" name="type">
</div>
<div class="form-field">
  <label>founded</label>
  <input type="text" name="founded">
</div>
<div class="form-field">
  <label>endowment</label>
  <input type="text" name="endowment">
</div>
<div class="form-field">
  <label>president</label>
  <input type="text" name="president">
</div>
<div class="form-field">
  <label>academic_staff</label>
  <input type="text" name="academic_staff">
</div>
<div class="form-field">
  <label>students</label>
  <input type="text" name="students">
</div>
<div class="form-field">
  <label>undergraduates</label>
  <input type="text" name="undergraduates">
</div>
<div class="form-field">
  <label>postgraduates</label>
  <input type="text" name="postgraduates">
</div>
<div class="form-field">
  <label>city_id</label>
  <input type="text" name="city_id">
</div>
<div class="form-field">
  <label>Country</label>

   <select type="text" name="country_id">
     @foreach($list_countries as $country)
     <option value="{{$country->id}}">{{$country->name}}</option>
     @endforeach
   </select>
</div>
<div class="form-field">
  <label>website</label>
  <input type="text" name="website">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
