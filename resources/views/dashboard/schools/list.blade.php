@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">name</th>
  <th scope="col">motto</th>
  <th scope="col">former_names</th>
  <th scope="col">type</th>
  <th scope="col">founded</th>
  <th scope="col">endowment</th>
  <th scope="col">president</th>
  <th scope="col">academic_staff</th>
  <th scope="col">students</th>
  <th scope="col">undergraduates</th>
  <th scope="col">postgraduates</th>
  <th scope="col">city_id</th>
  <th scope="col">country_id</th>
  <th scope="col">website</th>
  <th scope="col">Action</th>
  @foreach($list_schools as $school)
  <td>{{$school->id}}</td>
  <td>{{$school->name}}</td>
  <td>{{$school->motto}}</td>
  <td>{{$school->former_names}}</td>
  <td>{{$school->type}}</td>
  <td>{{$school->founded}}</td>
  <td>{{$school->endowment}}</td>
  <td>{{$school->president}}</td>
  <td>{{$school->academic_staff}}</td>
  <td>{{$school->students}}</td>
  <td>{{$school->undergraduates}}</td>
  <td>{{$school->postgraduates}}</td>
  <td>{{$school->city_id}}</td>
  <td>{{$school->country_id}}</td>
  <td>{{$school->website}}</td>
  <td>
    <form class="" action="{{url('/Dashboard/schools/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$school->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/schools/update/'.$school->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/schools/show/'.$school->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
