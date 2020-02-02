@extends('layouts.main')


@section('content')

@foreach($list_pages as $page)
<div class="">
  <span>name</span> <span>{{$page->name}}</span> <br>
  <span>presentation</span> <span>{{$page->presentation}}</span> <br>
  <span>Site web</span> <span>{{$page->site_web}}</span> <br>
  <span>sector</span> <span>{{$page->sector}}</span> <br>
  <span>enterprise type</span> <span>{{$page->enterprise_type}}</span> <br>
</div>
@endforeach




@endsection
