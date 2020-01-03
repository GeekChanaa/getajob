@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_certifications as $certification)
  <td>{{$certification->id}}</td>
  <td>{{$certification->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/certifications/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$certification->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/certifications/update/'.$certification->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/certifications/show/'.$certification->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
