@extends('layouts.main')



@section('content')
<div class="">
  <a class="btn btn-danger" href="{{url('/feed/create_page')}}">Create Page</a>
  <a class="btn btn-danger" href="{{url('/feed/create_group')}}">Create Group</a>
  <a class="btn btn-danger" href="{{url('/feed/create_event')}}">Create Event</a>
  <a class="btn btn-danger" href="{{url('/feed/create_seminar')}}">Create Seminar</a>
  <a class="btn btn-danger" href="{{url('/feed/create_training')}}">Create Training</a>
</div>

<div class="">
  <span>New post : </span>
  <div class="">
    <textarea id="post-content" rows="8" cols="80"></textarea>
    <button class="post">Post</button>
  </div>
</div>
<div class="">
  @foreach($list_posts as $post)
    <div class="">
      <span>{{$post->user->name}}</span>
      <span>{{$post->content}}</span>
        @foreach($post->comments as $comment)
        <div class="">
          <span>{{$comment->user->name}}</span>
          <span>{{$comment->content}}</span>
          @foreach($comment->replies as $reply)
          <span>{{$reply->user->name}}</span>
          <span>{{$reply->content}}</span>
          @endforeach
          <textarea id="reply-content-{{$comment->id}}" rows="8" cols="80"></textarea>
          <button type="button" class="reply" data-id="{{$comment->id}}">reply</button>
        </div>

        @endforeach
        <textarea id="content-{{$post->id}}"></textarea>
        <button type="button" class="comment" data-id="{{$post->id}}">comment</button>
    </div>
  @endforeach


</div>


sd
<script type="text/javascript">
// Adding Posts by ajax
$(document).on("click", ".post", function(e){
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/addpost",
     method: 'post',
     data: {
       content : $('#post-content').val(),
     },
     success: function(result){
       alert(result.post.content);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

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
       alert(result.comment.content);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// Adding replies

$(document).on("click", ".reply", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/addreply",
     method: 'post',
     data: {
       id : id,
       content : $('#reply-content-'+id).val(),
     },
     success: function(result){
       alert(result.reply.content);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


</script>



@endsection
