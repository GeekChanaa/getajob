@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">name</th>
  <th scope="col">iso3</th>
  <th scope="col">iso2</th>
  <th scope="col">phonecode</th>
  <th scope="col">capital</th>
  <th scope="col">currency</th>
  <th scope="col">Action</th>
  @foreach($list_countries as $country)
  <td>{{$country->id}}</td>
  <td>{{$country->name}}</td>
  <td>{{$country->iso3}}</td>
  <td>{{$country->iso2}}</td>
  <td>{{$country->phonecode}}</td>
  <td>{{$country->capital}}</td>
  <td>{{$country->currency}}</td>
  <td>
    <form class="" action="{{url('/Dashboard/countries/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$country->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/countries/update/'.$country->id.'')}}">Update</a>
    

  </td>
  @endforeach
</table>


@endsection
