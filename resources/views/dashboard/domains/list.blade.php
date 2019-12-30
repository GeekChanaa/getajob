@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_domains as $domain)
  <td>{{$domain->id}}</td>
  <td>{{$domain->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/domains/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$domain->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/domains/update/'.$domain->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/domains/show/'.$domain->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
