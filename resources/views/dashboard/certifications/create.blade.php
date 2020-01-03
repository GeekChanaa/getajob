@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/certifications/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>Name : </span> <input type="text" name="name"> <br>
  <span>Description : </span> <input type="text" name="description">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
