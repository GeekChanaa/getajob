@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Country</th>
  <th scope="col">Action</th>
  @foreach($list_cities as $city)
  <td>{{$city->id}}</td>
  <td>{{$city->name}}</td>
  <td>{{$city->country_id}}</td>
  <td>
    <form class="" action="{{url('/Dashboard/cities/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$city->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/cities/update/'.$city->id.'')}}">Update</a>
    

  </td>
  @endforeach
</table>


@endsection
