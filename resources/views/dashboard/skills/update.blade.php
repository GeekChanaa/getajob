@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/skills/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$skill->name}}">
</div>
<input type="hidden"  name="id" value="{{$skill->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
