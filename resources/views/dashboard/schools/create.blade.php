@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/schools/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name">
</div>
<div class="">
  <span>motto : </span> <input type="text" name="motto">
</div>
<div class="">
  <span>former_names : </span> <input type="text" name="former_names">
</div>
<div class="">
  <span>type : </span> <input type="text" name="type">
</div>
<div class="">
  <span>founded : </span> <input type="text" name="founded">
</div>
<div class="">
  <span>endowment : </span> <input type="text" name="endowment">
</div>
<div class="">
  <span>president : </span> <input type="text" name="president">
</div>
<div class="">
  <span>academic_staff : </span> <input type="text" name="academic_staff">
</div>
<div class="">
  <span>students : </span> <input type="text" name="students">
</div>
<div class="">
  <span>undergraduates : </span> <input type="text" name="undergraduates">
</div>
<div class="">
  <span>postgraduates : </span> <input type="text" name="postgraduates">
</div>
<div class="">
  <span>city_id : </span> <input type="text" name="city_id">
</div>
<div class="">
  <span>Country : </span>
   <select type="text" name="country_id">
     @foreach($list_countries as $country)
     <option value="{{$country->id}}">{{$country->name}}</option>
     @endforeach
   </select>
</div>
<div class="">
  <span>website : </span> <input type="text" name="website">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
