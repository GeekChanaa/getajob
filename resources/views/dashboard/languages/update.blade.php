@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/languages/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$language->name}}">
</div>
<input type="hidden"  name="id" value="{{$language->id}}">

<button type="submit" name="button">Create</button>
</form>


@endsection
