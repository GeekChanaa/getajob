@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/posts/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>content : </span> <input type="text" name="content" value="{{$post->content}}">
</div>
<input type="hidden"  name="id" value="{{$post->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
