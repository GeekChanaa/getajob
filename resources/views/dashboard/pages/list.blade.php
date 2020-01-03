@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_pages as $page)
  <td>{{$page->id}}</td>
  <td>{{$page->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/pages/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$page->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/pages/update/'.$page->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/pages/show/'.$page->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
