@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Title</th>
  <th scope="col">Action</th>
  @foreach($list_trainings as $training)
  <td>{{$training->id}}</td>
  <td>{{$training->title}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/trainings/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$training->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/trainings/update/'.$training->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/trainings/show/'.$training->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
