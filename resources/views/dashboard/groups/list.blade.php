@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_groups as $group)
  <td>{{$group->id}}</td>
  <td>{{$group->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/groups/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$group->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/groups/update/'.$group->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/groups/show/'.$group->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
