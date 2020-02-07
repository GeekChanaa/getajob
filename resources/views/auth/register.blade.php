

@extends('layouts.main')


@section('content')


<form class="form" action="{{ __('register') }}" method="post">
@csrf
<div class="left-side-register">

</div>
<div class="right-side">
  <h1>Register</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>Name</label>
    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  </div>
  <div class="form-field">
    <label>E-mail</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
  </div>
  <div class="form-field">
    <label>Phone</label>
    <input id="phone" type="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
  </div>
  <div class="form-field">
    <label class="moveup">Country</label>
    <select id="country_id" name="country_id" value="{{ old('country') }}" required autocomplete="country">
      @foreach($list_countries as $country)
      <option value="{{$country->id}}">{{$country->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-field">
    <label class="moveup">City</label>
    <select id="city_id" name="city_id" value="{{ old('city') }}" required autocomplete="city">
      @foreach($list_cities as $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-field">
    <label>Password</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
  </div>



  <div class="form-button">
    <button type="submit">Register</button>
  </div>
</div>
</form>




@endsection
