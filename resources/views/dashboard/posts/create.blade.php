@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/posts/add')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>content : </span> <textarea name="content"> </textarea>
</div>

<button type="submit" name="button">Create</button>
</form>


@endsection
