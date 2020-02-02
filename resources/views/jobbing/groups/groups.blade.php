@extends('layouts.app')


@section('content')

@foreach($list_groups as $group)
<div class="">
  <span> Name</span> <span><a href="{{url('/groups/group/'.$group->id.'/')}}"> {{$group->name}}</a> </span> <br>
  <span>Description</span> <span> {{$group->description}} </span> <br>
  <span>Rules</span> <span> {{$group->rules}} </span> <br>
</div>
@endforeach




@endsection
