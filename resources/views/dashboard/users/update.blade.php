@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/users/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$user->name}}">
</div>
<div class="">
  <span>email : </span> <input type="text" name="email" value="{{$user->email}}">
</div>
<div class="">
  <span>phone : </span> <input type="text" name="phone" value="{{$user->phone}}">
</div>
<div class="">
  <span>country : </span>
  <select type="text" name="country_id">
    @foreach($list_countries as $country)
      <option @if($user->country_id == $country->id) selected @endif value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
<div class="">
  <span>city : </span> <input type="text" name="name" value="{{$user->city->name}}">
</div>

<input type="hidden"  name="id" value="{{$user->id}}">
<button type="submit" name="button">Update</button>
</form>


@endsection
