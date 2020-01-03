@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/certifications/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$certification->name}}">
</div>
<div class="">
  <span>description : </span> <input type="text" name="name" value="{{$certification->description}}">
</div>
<input type="hidden"  name="id" value="{{$certification->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
