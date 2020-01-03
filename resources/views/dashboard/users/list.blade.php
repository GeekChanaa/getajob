@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">mail</th>
  <th scope="col">phone</th>
  <th scope="col">country</th>
  <th scope="col">city</th>
  <th scope="col">Action</th>
  @foreach($list_users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->country->name}}</td>
    <td>{{$user->city->name}}</td>

    <td>
      <form class="" action="{{url('/Dashboard/users/delete')}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="hidden" name="id" value="{{$user->id}}">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <a href="{{url('/Dashboard/users/update/'.$user->id.'')}}">Update</a>
      <a href="{{url('/Dashboard/users/show/'.$user->id.'')}}">Show</a>

    </td>
  </tr>

  @endforeach
</table>


@endsection
