@extends('layouts.main')


@section('content')


<form class="form" action="{{ route('login') }}" method="post">
@csrf
<div class="left-side-login">

</div>
<div class="right-side">
  <h1>Login</h1>
  <div class="line"></div>
  <div class="form-field">
    <label>login</label>
    <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  </div>
  <div class="form-field">
    <label>begin time</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
  </div>


  <div class="form-button">
    <button type="submit">Login</button>
  </div>
</div>
</form>




@endsection
