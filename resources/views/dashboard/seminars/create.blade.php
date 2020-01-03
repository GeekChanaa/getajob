@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/seminars/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>title : </span> <input type="text" name="title">
</div>
<div class="">
  <span>begin time : </span> <input type="date" name="begin">
</div>
<div class="">
  <span>end time : </span> <input type="date" name="end">
</div>
<div class="">
  <span>description : </span> <input type="text" name="description">
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
