@extends('layouts.main')


@section('content')


@foreach($list_seminars as $seminar)
  <div class="">
    <span>Title</span>
    <span>{{$seminar->title}}</span>
  </div>
  <div class="">
    <span>Date begin</span>
    <span>{{$seminar->begin}}</span>
  </div>
  <div class="">
    <span>Date end</span>
    <span>{{$seminar->end}}</span>
  </div>
  <div class="">
    <span>user</span>
    <span>{{$seminar->user->name}}</span>
  </div>
  <div class="">
    <span>Description</span>
    <span>{{$seminar->description}}</span>
  </div>
  <button class="interestedIn btn btn-dark" data-id="{{$seminar->id}}" name="button">Interested In</button>
@endforeach
<div class="">
  <a href="{{url('/feed/create_seminar')}}" class="btn btn-dark"> Create Seminar </a>
</div>



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
     url: "/ajax/interestedInSeminar",
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
