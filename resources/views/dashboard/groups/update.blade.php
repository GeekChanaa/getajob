@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/groups/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$group->name}}"> <br>
</div>
<div class="">
  <span>visibility : </span> <input type="text" name="description" value="{{$group->visibility}}">
</div>
<div class="">
  <span>description : </span> <input type="text" name="description" value="{{$group->description}}">
</div>
<div class="">
  <span>rules : </span> <input type="text" name="description" value="{{$group->rules}}">
</div>
<input type="hidden"  name="id" value="{{$group->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
