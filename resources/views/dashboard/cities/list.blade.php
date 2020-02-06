@extends('layouts.dashboard')



@section('content')



<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100 ver1">
        <div class="table100-firstcol">
          <table>
            <thead>
              <tr class="row100 head">
                <th class="cell100 column1">Cities</th>

              </tr>
            </thead>
            <tbody>
              @foreach($list_cities as $city)
              <tr class="row100 body">
                <td class="cell100 column1">{{$city->name}}</td>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
       </div>
       	<div class="wrap-table100-nextcols js-pscroll">
          <div class="table100-nextcols">
            <table>
              <thead>
                <tr class="row100 head">
                  <th scope="cell100 column2">ID</th>
                  <th scope="cell100 column3">name</th>
                  <th scope="cell100 column4">country</th>
                  <th scope="cell100 column4">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach($list_cities as $city)
                <tr class="row100 body">
                  <td class="cell100 column2">{{$city->id}}</td>
                  <td class="cell100 column3">{{$city->name}}</td>
                  <td class="cell100 column4">{{$city->country_id}}</td>
                  <td class="cell100 column8">
                   <form class="" action="{{url('/Dashboard/cities/delete')}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <input type="hidden" name="id" value="{{$city->id}}">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection
