@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/domains/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$domain->name}}">
</div>
<input type="hidden"  name="id" value="{{$domain->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
