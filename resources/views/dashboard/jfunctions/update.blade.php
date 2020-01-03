@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/jfunctions/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$jfunction->name}}">
</div>
<input type="hidden"  name="id" value="{{$jfunction->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
