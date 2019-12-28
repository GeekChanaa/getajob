@extends('layouts.dashboard')



@section('content')


<table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">name</th>
  <th scope="col">industry</th>
  <th scope="col">founded</th>
  <th scope="col">founders</th>
  <th scope="col">headquarters</th>
  <th scope="col">area_served</th>
  <th scope="col">key_people</th>
  <th scope="col">products</th>
  <th scope="col">revenue</th>
  <th scope="col">operating_income</th>
  <th scope="col">net_income</th>
  <th scope="col">total_assets</th>
  <th scope="col">nbr_employees</th>
  <th scope="col">parent</th>
  <th scope="col">website</th>
  <th scope="col">Action</th>
  @foreach($list_enterprises as $enterprise)
  <td>{{$enterprise->id}}</td>
  <td>{{$enterprise->name}}</td>
  <td>{{$enterprise->industry}}</td>
  <td>{{$enterprise->founded}}</td>
  <td>{{$enterprise->founders}}</td>
  <td>{{$enterprise->headquarters}}</td>
  <td>{{$enterprise->area_served}}</td>
  <td>{{$enterprise->key_people}}</td>
  <td>{{$enterprise->products}}</td>
  <td>{{$enterprise->revenue}}</td>
  <td>{{$enterprise->operating_income}}</td>
  <td>{{$enterprise->net_income}}</td>
  <td>{{$enterprise->total_assets}}</td>
  <td>{{$enterprise->nbr_employees}}</td>
  <td>{{$enterprise->parent}}</td>
  <td>{{$enterprise->website}}</td>
  <td>
    <form class="" action="{{url('/Dashboard/enterprises/delete')}}" method="post">
      @csrf
      {{method_field('DELETE')}}
      <input type="hidden" name="id" value="{{$enterprise->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{url('/Dashboard/enterprises/update/'.$enterprise->id.'')}}">Update</a>
    <a href="{{url('/Dashboard/enterprises/show/'.$enterprise->id.'')}}">Show</a>

  </td>
  @endforeach
</table>


@endsection
