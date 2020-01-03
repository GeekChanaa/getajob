@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Action</th>
  @foreach($list_languages as $language)
  <td>{{$language->id}}</td>
  <td>{{$language->name}}</td>

  <td>
    <form class="" action="{{url('/Dashboard/languages/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$language->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/languages/update/'.$language->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/languages/show/'.$language->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
