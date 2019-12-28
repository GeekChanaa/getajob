@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/schools/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$school->name}}">
</div>
<div class="">
  <span>motto : </span> <input type="text" name="motto" value="{{$school->motto}}">
</div>
<div class="">
  <span>former_names : </span> <input type="text" name="former_names" value="{{$school->former_names}}">
</div>
<div class="">
  <span>type : </span> <input type="text" name="type" value="{{$school->type}}">
</div>
<div class="">
  <span>founded : </span> <input type="text" name="founded" value="{{$school->founded}}">
</div>
<div class="">
  <span>endowment : </span> <input type="text" name="endowment" value="{{$school->endowment}}">
</div>
<div class="">
  <span>president : </span> <input type="text" name="president" value="{{$school->president}}">
</div>
<div class="">
  <span>academic_staff : </span> <input type="text" name="academic_staff" value="{{$school->academic_staff}}">
</div>
<div class="">
  <span>students : </span> <input type="text" name="students" value="{{$school->students}}">
</div>
<div class="">
  <span>undergraduates : </span> <input type="text" name="undergraduates" value="{{$school->undergraduates}}">
</div>
<div class="">
  <span>postgraduates : </span> <input type="text" name="postgraduates" value="{{$school->postgraduates}}">
</div>
<div class="">
  <span>city_id : </span> <input type="text" name="city_id" value="{{$school->city_id}}">
</div>
<div class="">
  <span>Country : </span>
   <select type="text" name="country_id">
     @foreach($list_countries as $country)
     <option @if($country->id == $school->country_id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
     @endforeach
   </select>
</div>
<div class="">
  <span>website : </span> <input type="text" name="website" value="{{$school->website}}">
</div>

<button type="submit" name="button" value="{{$school->button}}">Create</button>
</form>


@endsection
