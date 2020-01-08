@extends('layouts.main')


@section('content')


@foreach($list_trainings as $training)
  <div class="">
    <span>Title</span>
    <span>{{$training->title}}</span>
  </div>
  <div class="">
    <span>Diplomat</span>
    <span>{{$training->diplomat}}</span>
  </div>
  <div class="">
    <span>Description</span>
    <span>{{$training->description}}</span>
  </div>
  <div class="">
    <span>user</span>
    <span>{{$training->user->name}}</span>
  </div>
  <div class="">
    <span>conditions</span>
    <span>{{$training->conditions}}</span>
  </div>
  <div class="">
    <span>phone</span>
    <span>{{$training->phone}}</span>
  </div>
  <div class="">
    <span>email</span>
    <span>{{$training->email}}</span>
  </div>
  <div class="">
    <span>school</span>
    <span>{{$training->school}}</span>
  </div>

  <button class="interestedIn btn btn-dark" data-id="{{$training->id}}" name="button">Interested In</button>
@endforeach
<a class="btn btn-dark" href="{{url('/feed/create_training')}}">Create training</a>

<script type="text/javascript">
// interested in seminar ajax
$(document).on("click", ".interestedIn", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/interestedInTraining",
     method: 'post',
     data: {
       id : id,
     },
     success: function(result){
       alert('success');
     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });
</script>
@endsection
