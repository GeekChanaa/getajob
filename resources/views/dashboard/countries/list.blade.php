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
                <th class="cell100 column1">Country</th>

              </tr>
            </thead>
            <tbody>
              @foreach($list_countries as $country)
              <tr class="row100 body">
                <td class="cell100 column1">{{$country->name}}</td>
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
                  <th scope="cell100 column3">iso3</th>
                  <th scope="cell100 column4">iso2</th>
                  <th scope="cell100 column5">phonecode</th>
                  <th scope="cell100 column6">capital</th>
                  <th scope="cell100 column7">currency</th>
                  <th scope="cell100 column8">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list_countries as $country)
                <tr class="row100 body">
                  <td class="cell100 column2">{{$country->id}}</td>
                  <td class="cell100 column3">{{$country->iso3}}</td>
                  <td class="cell100 column4">{{$country->iso2}}</td>
                  <td class="cell100 column5">{{$country->phonecode}}</td>
                  <td class="cell100 column6">{{$country->capital}}</td>
                  <td class="cell100 column7">{{$country->currency}}</td>
                  <td class="cell100 column8">
                    <!-- <form class="" action="{{url('/Dashboard/countries/delete')}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <input type="hidden" name="id" value="{{$country->id}}">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{url('/Dashboard/countries/update/'.$country->id.'')}}">Update</a> -->
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

<!-- <table class="table table-dark">
  <th scope="col">ID</th>
  <th scope="col">name</th>
  <th scope="col">iso3</th>
  <th scope="col">iso2</th>
  <th scope="col">phonecode</th>
  <th scope="col">capital</th>
  <th scope="col">currency</th>
  <th scope="col">Action</th>
  @foreach($list_countries as $country)
  <tr>


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
    </tr>
  @endforeach
</table> -->


@endsection
