@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_jfunctions as $jfunction)
  <td>{{$jfunction->id}}</td>
  <td>{{$jfunction->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/jfunctions/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$jfunction->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/jfunctions/update/'.$jfunction->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/jfunctions/show/'.$jfunction->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
