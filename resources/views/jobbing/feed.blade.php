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
      <span>{{$post->comments_count}} comments</span>
        @foreach($post->comments as $comment)
        <div class="">
          <span>{{$comment->user->name}}</span>
          <span>{{$comment->content}}</span>
          @foreach($comment->replies as $reply)
          <span>{{$reply->user->name}}</span>
          <span>{{$reply->content}}</span>
          <button class="like-reply" data-reply="{{$reply->id}}">like reply</button>
          <button class="report-reply" data-reply="{{$reply->id}}">report reply</button>

          @endforeach
          <textarea id="reply-content-{{$comment->id}}" rows="8" cols="80"></textarea>
          <button type="button" class="reply" data-id="{{$comment->id}}">reply</button>
          <button class="like-comment" data-comment="{{$comment->id}}">like comment</button>
          <button class="report-comment" data-comment="{{$comment->id}}">report comment</button>

        </div>

        @endforeach
        <textarea id="content-{{$post->id}}"></textarea>
        <button type="button" class="comment" data-id="{{$post->id}}">comment</button>
    </div>
    <div class="">
      {{$post->likes_count}} likes<button class="like-post" data-post="{{$post->id}}">like post</button>
      <button class="report-post" data-post="{{$post->id}}">report post</button>
    </div>
  @endforeach


</div>

<div class="">
 <h3>Pages</h3>
 @foreach($list_pages as $page)
  <div class="">
    <span>Name : {{$page->name}}</span>
    <button class="like-page" data-pageid="{{$page->id}}">like page</button>
    <button class="follow-page" data-pageid="{{$page->id}}">follow page</button>

  </div>
 @endforeach
</div>

<div class="">
  <h3>Groups</h3>
  @foreach($list_groups as $group)
  <div class="">
    <span>Name : {{$group->name}}</span>
  </div>
  @endforeach
</div>

<div class="">
  <h3>Events</h3>
  @foreach($list_events as $event)
    <div class="">
      <span>Name : {{$event->name}} </span>
      <button class="like-event" data-eventid="{{$event->id}}">like event</button>
      <button class="interestedin-event" data-eventid="{{$event->id}}">interested in event</button>
    </div>
  @endforeach
</div>


<script type="text/javascript">
// interested in event
$(document).on("click", ".follow-page", function(e){
  var id = $(this).data('pageid');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/followPage",
     method: 'post',
     data: {
       page_id : id,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

  // like page
  $(document).on("click", ".like-page", function(e){
    var id = $(this).data('pageid');
    e.preventDefault();
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }

    });
    jQuery.ajax({
       url: "/ajax/likePage",
       method: 'post',
       data: {
         page_id : id,
       },
       success: function(result){
         alert("success");

       },
       error: function(jqXHR, textStatus, errorThrown){
         alert('error');
     }});
    });


// interested in event
$(document).on("click", ".interestedin-event", function(e){
  var id = $(this).data('eventid');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/interestedInEvent",
     method: 'post',
     data: {
       event_id : id,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// Liking event
$(document).on("click", ".like-event", function(e){
  var id = $(this).data('eventid');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/likeevent",
     method: 'post',
     data: {
       event_id : id,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// Liking post
$(document).on("click", ".like-post", function(e){
  var post = $(this).data('post');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/likepost",
     method: 'post',
     data: {
       post_id : post,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// Liking comment
$(document).on("click", ".like-comment", function(e){
  var comment = $(this).data('comment');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/likecomment",
     method: 'post',
     data: {
       comment_id : comment,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// Liking reply
$(document).on("click", ".like-reply", function(e){
  var reply = $(this).data('reply');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/likereply",
     method: 'post',
     data: {
       reply_id : reply,
     },
     success: function(result){
       alert("success");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


  // reporting post
  $(document).on("click", ".report-post", function(e){
    var post = $(this).data('post');
    e.preventDefault();
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }

    });
    jQuery.ajax({
       url: "/ajax/reportpost",
       method: 'post',
       data: {
         post_id : post,
       },
       success: function(result){
         alert("success");

       },
       error: function(jqXHR, textStatus, errorThrown){
         alert('error');
     }});
    });


  // reporting comment
  $(document).on("click", ".report-comment", function(e){
    var comment = $(this).data('comment');
    e.preventDefault();
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }

    });
    jQuery.ajax({
       url: "/ajax/reportcomment",
       method: 'post',
       data: {
         comment_id : comment,
       },
       success: function(result){
         alert("success");

       },
       error: function(jqXHR, textStatus, errorThrown){
         alert('error');
     }});
    });


  // reporting reply
  $(document).on("click", ".report-reply", function(e){
    var reply = $(this).data('reply');
    e.preventDefault();
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }

    });
    jQuery.ajax({
       url: "/ajax/reportreply",
       method: 'post',
       data: {
         reply_id : reply,
       },
       success: function(result){
         alert("success");

       },
       error: function(jqXHR, textStatus, errorThrown){
         alert('error');
     }});
    });


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
