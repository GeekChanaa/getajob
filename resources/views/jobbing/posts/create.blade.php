@extends('layouts.main')


@section('content')


<form class="" action="{{url('/feed/add_post')}}" method="post">
@csrf
  <div class="">
      <span>Content</span>
    <textarea name="content" rows="8" cols="80"></textarea>

  </div>
  <div class="">
    <button type="submit">Create</button>
  </div>
</form>


@endsection
