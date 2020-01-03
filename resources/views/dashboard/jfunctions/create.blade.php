@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/jfunctions/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
