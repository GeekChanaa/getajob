@extends('layouts.main')


@section('content')
<section id="hero">
  <div id="hero-content" class="container">
    <h1>Find the best training for you</h1>
    <div class="heading-border"></div>
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laudantium deserunt, incidunt, hic ad perferendis aspernatur suscipit minus sit amet, odio eos eligendi pariatur praesentium, quo natus in doloremque. Ipsa.</h2>
    <form class="search-form" action="">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="28.931px" height="28.932px" viewBox="0 0 28.931 28.932" style="enable-background:new 0 0 28.931 28.932;"
         xml:space="preserve">
        <g>
          <path d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672
            C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266
            c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115
            c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111
            c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422
            c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"/>
        </g>
      </svg>
      <label for="search-input">Search for seminar by domain, or title ..</label>
      <input type="text" id="search-input" autocomplete="off">
    </form>
  </div>
  <div id="hero-te">

  </div>
</section>
<svg style="background-color:white;" fill="var(--main-color)" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" viewBox="0 54 1024 162" preserveAspectRatio="none" class="fusion-waves-candy"><path d="M0 216.312h1024v-3.044c-50.8-17.1-108.7-30.7-172.7-37.9-178.6-19.8-220 36.8-404.9 21.3-206.6-17.2-228-126.5-434.5-141.6-3.9-.3-7.9-.5-11.9-.7v161.944z" class="st3"></path></svg>
<div class="seminars">
  @foreach($list_trainings as $seminar)
  <div class="seminar">
    <div class="seminar-avatar">
      T
    </div>
    <div class="seminar-title">
      <span>{{$seminar->title}}</span>
    </div>
    <div class="seminar-description">
      <span>{{$seminar->description}}</span>
    </div>
    <div class="seminar-date">
      <span>Beginning in</span>
      <span>{{explode(" ",$seminar->date_begin)[0]}}</span>
    </div>
    <div class="seminar-date">
      <span>Finishing in</span>
      <span>{{explode(" ",$seminar->end)[0]}}</span>
    </div>
    <div class="seminar-user">
      <svg viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/>
      </svg>
      <span>{{$seminar->s}}</span>
    </div>
    <button class="interestedIn" data-id="{{$seminar->id}}" name="button">Interested In</button>
  </div>
  @endforeach
  <div class="create-seminar" style="width:100%;">
    <a style="background-color:black;color:white" href="{{url('/feed/create_training')}}" class="">Create Seminar </a>
  </div>
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
