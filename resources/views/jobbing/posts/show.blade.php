@extends('layouts.main')


@section('content')


<h1>Post : {{$post->id}}</h1>

<div class="">
  <span>Post Writer : </span>
  <span>{{$post->user->name}}</span>
</div>
<div class="">
  <span>Content : </span>
  <span>{{$post->content}}</span>
</div>
<div class="">
  <span>number of likes : </span>
  <span>{{$post->likes_count}}</span>
</div>
<div class="">
  <span>number of comments : </span>
  <span>{{$post->comments_count}}</span>
</div>
<button class="report-post" data-post="{{$post->id}}">report post</button>
<button class="like-post" data-post="{{$post->id}}">Like post</button>
<div class="">
  <h3>Comments</h3>
    @foreach($post->comments as $comment)

      <div class="">
        <span>user : {{$comment->user->name}}</span>
        <span>content : {{$comment->content}}</span>
        <div class="">
          <h4>Replies</h4>
          @foreach($comment->replies as $reply)
            <div class="">
              <span>user : {{$reply->user->name}}</span>
              <span>content : {{$reply->content}}</span>
              <button class="like-reply" data-reply="{{$reply->id}}">like reply</button>
              <button class="report-reply" data-reply="{{$reply->id}}">report reply</button>
            </div>
          @endforeach
          <textarea id="reply-content-{{$comment->id}}" rows="8" cols="80"></textarea>
          <button type="button" class="reply" data-id="{{$comment->id}}">reply</button>
          <button class="like-comment" data-comment="{{$comment->id}}">like comment</button>
          <button class="report-comment" data-comment="{{$comment->id}}">report comment</button>
        </div>
      </div>
    @endforeach
    <textarea id="content-{{$post->id}}"></textarea>

    <button type="button" class="comment" data-id="{{$post->id}}">comment</button>

</div>


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
</script>


@endsection
