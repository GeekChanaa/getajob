@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/skills/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$skill->name}}">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
