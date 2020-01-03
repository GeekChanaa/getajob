@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_posts as $post)
  <td>{{$post->id}}</td>
  <td>{{$post->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/posts/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$post->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/posts/update/'.$post->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/posts/show/'.$post->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
