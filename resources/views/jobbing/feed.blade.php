@extends('layouts.main')



@section('content')


<div class="">
  @foreach($list_posts as $post)
    <div class="">
      <span>{{$post->user->name}}</span>
      <span>{{$post->content}}</span>
        @foreach($post->comments as $comment)
        <span>{{$comment->user->name}}</span>
        <span>{{$comment->content}}</span>
        @endforeach
        <textarea id="content-{{$post->id}}"></textarea>
        <button type="button" class="comment" data-id="{{$post->id}}">comment</button>
    </div>
  @endforeach

</div>


sd
<script type="text/javascript">
// Adding Comments
$(document).on("click", ".comment", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/addcomment",
     method: 'post',
     data: {
       id : id,
       content : $('#content-'+id).val(),
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


</script>



@endsection
