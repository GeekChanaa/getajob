@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_skills as $skill)
  <td>{{$skill->id}}</td>
  <td>{{$skill->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/skills/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$skill->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/skills/update/'.$skill->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/skills/show/'.$skill->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
