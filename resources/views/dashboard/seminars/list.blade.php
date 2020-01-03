@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_seminars as $seminar)
  <td>{{$seminar->id}}</td>
  <td>{{$seminar->title}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/seminars/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$seminar->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/seminars/update/'.$seminar->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/seminars/show/'.$seminar->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
