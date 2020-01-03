@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/Dashboard/pages/update')}}" method="post">
{{csrf_field()}}
<div class="">
  <span>name : </span> <input type="text" name="name" value="{{$page->name}}"> <br>

</div>
<div class="">
  <span>presentation : </span> <input type="text" name="presentation" value="{{$page->presentation}}"> <br>

</div>
<div class="">
  <span>site_web : </span> <input type="text" name="site_web" value="{{$page->site_web}}"> <br>

</div>
<div class="">
  <span>sector : </span> <input type="text" name="sector" value="{{$page->sector}}"> <br>

</div>
<div class="">
  <span>Enterprise type : </span> <input type="text" name="enterprise_type" value="{{$page->enterprise_type}}"> <br>

</div>
<input type="hidden"  name="id" value="{{$page->id}}">

<button type="submit" name="button">Update</button>
</form>


@endsection
