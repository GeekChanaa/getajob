@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Date begin</th>
  <th scope="col">Date finish</th>
  <th scope="col">Action</th>
  @foreach($list_events as $event)
  <td>{{$event->id}}</td>
  <td>{{$event->name}}</td>
  <td>{{$event->begin_time}}</td>
  <td>{{$event->finish_time}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/events/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$event->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/events/update/'.$event->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/events/show/'.$event->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
