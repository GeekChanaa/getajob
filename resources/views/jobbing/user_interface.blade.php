@extends('layouts.main')


@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-certification">
  New certification
</button>

<!-- Modal -->
<div class="modal fade" id="new-certification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New certification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>Certification</span>
          <input id="newCertification-certification" type="text" name="certification">
        </div>
        <div class="">
          <span>Issuing organization</span>
          <input id="newCertification-issuing-organization" type="text" name="issuing_organization">
        </div>
        <div class="">
          <span>Date obtained</span>
          <input id="newCertification-date-obtained" type="date" name="date_obtained">
        </div>
        <div class="">
          <span>Expiry Date</span>
          <input id="newCertification-expiry-date" type="date" name="expiry_date">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addCertification" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-volunteer-experience">
  New volunteer experience
</button>

<!-- Modal -->
<div class="modal fade" id="new-volunteer-experience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New volunteer experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>Organization</span>
          <input id="newVolunteerexperience-organisation" type="text" name="organisation" value="">
        </div>
        <div class="">
          <span>Role</span>
          <input id="newVolunteerexperience-role" type="text" name="role" value="">
        </div>
        <div class="">
          <span>Cause</span>
          <input id="newVolunteerexperience-cause" type="text" name="cause" value="">
        </div>
        <div class="">
          <span>Currently involved</span>
          <input id="newVolunteerexperience-current" type="number" name="current" value="">
        </div>
        <div class="">
          <span>start date</span>
          <input id="newVolunteerexperience-start-date" type="date" name="start_date" value="">
        </div>
        <div class="">
          <span>end date</span>
          <input id="newVolunteerexperience-end-date" type="date" name="end_date" value="">
        </div>
        <div class="">
          <span>description</span>
          <input id="newVolunteerexperience-description" type="text" name="description" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addVolunteerExperience" class="btn btn-primary">add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-patent">
  New Patent
</button>

<!-- Modal -->
<div class="modal fade" id="new-patent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New patent</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>Title</span>
          <input id="newPatent-title" type="text" name="title" value="">
        </div>
        <div class="">
          <span>office</span>
          <input id="newPatent-office" type="text" name="office" value="">
        </div>
        <div class="">
          <span>status</span>
          <input id="newPatent-status" type="number" name="status" value="">
        </div>
        <div class="">
          <span>Issue Date</span>
          <input id="newPatent-issue-date" type="date" name="issue_date" value="">
        </div>
        <div class="">
          <span>description</span>
          <input id="newPatent-description" type="text" name="description" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addPatent" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-course">
  New Course
</button>

<!-- Modal -->
<div class="modal fade" id="new-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>name</span>
          <input id="newCourse-name" type="text" name="name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addCourse">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-project">
  New Project
</button>

<!-- Modal -->
<div class="modal fade" id="new-project" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>name</span>
          <input id="newProject-name" type="text" name="name" value="">
        </div>
        <div class="">
          <span>Begin date</span>
          <input id="newProject-date-begin" type="date" name="date_begin" value="">
        </div>
        <div class="">
          <span>End date</span>
          <input id="newProject-date-end" type="date" name="date_end" value="">
        </div>
        <div class="">
          <span>Description</span>
          <input id="newProject-description" type="text" name="description" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addProject" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-language">
  New Language
</button>

<!-- Modal -->
<div class="modal fade" id="new-language" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <span>Language</span>
          <select id="newLanguage-language-id" type="text" name="language_id" value="">
            @foreach($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="addLanguage" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<div class="">
  <h4>Informations</h4>
  <div class="">
    <span>Name</span>
    <span>{{Auth::user()->name}}</span>
  </div>
  <div class="">
    <span>Email</span>
    <span>{{Auth::user()->email}}</span>
  </div>
  <div class="">
    <span>Phone</span>
    <span>{{Auth::user()->phone}}</span>
  </div>
  <div class="">
    <span>Country</span>
    <span>{{Auth::user()->country->name}}</span>
  </div>
  <div class="">
    <span>City</span>
    <span>{{Auth::user()->city->name}}</span>
  </div>
</div>

<div class="">
  <h5>Certifications</h5>
    @foreach($list_certifications as $certification)
    <div class="">
      <span>Certification : {{$certification->certification}}</span>
      <button class="btn btn-danger" id="deleteCertification" data-id="{{$certification->id}}">Delete</button>
    </div>
    @endforeach
</div>


<div class="">
  <h5>Volunteer Experiences</h5>
  @foreach($list_volunteer_experiences as $volunteer_experience)
  <div class="">
    <span>organisation : {{$volunteer_experience->organisation}}</span>
    <span>role : {{$volunteer_experience->role}}</span>
    <span>cause : {{$volunteer_experience->cause}}</span>
    <button class="btn btn-danger" id="deleteVolunteerExperience" data-id="{{$volunteer_experience->id}}">Delete</button>
  </div>
  @endforeach

</div>

<div class="">
  <h5>Patents</h5>

    @foreach($list_patents as $patent)
      <div class="">
        <span>Title : {{$patent->title}}</span>
        <span>Office : {{$patent->office}}</span>
        <span>Status : {{$patent->status}}</span>
        <button class="btn btn-danger" id="deletePatent" data-id="{{$patent->id}}">Delete</button>
      </div>
    @endforeach

</div>


<div class="">
  <h5>Courses</h5>
    @foreach($list_courses as $course)
    <div class="">
      <span>Course name : {{$course->name}}</span>
      <button class="btn btn-danger" id="deleteCourse" data-id="{{$course->id}}">Delete</button>
    </div>
    @endforeach
</div>

<div class="">
  <h5>Projects</h5>
    @foreach($list_projects as $project)
    <div class="">
      <span>Name : {{$project->name}}</span>
      <button class="btn btn-danger" id="deleteProject" data-id="{{$project->id}}">Delete</button>
    </div>
    @endforeach
</div>

<div class="">
  <h5>Languages</h5>
    @foreach($list_languages as $language)
    <div class="">
      <span>name : {{$language->name}}</span>
      <span>Date Begin : {{$language->date_begin}}</span>
      <span>Date end : {{$language->date_end}}</span>
      <button class="btn btn-danger" id="deleteLanguage" data-id="{{$language->id}}">Delete</button>
    </div>
    @endforeach
</div>


<script type="text/javascript">
// Delete Certification

$(document).on("click", "#deleteCertification", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deletecertification",
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

// Delete course

$(document).on("click", "#deleteCourse", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deletecourse",
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

// delete patent
$(document).on("click", "#deletePatent", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deletepatent",
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

// delete volunteer experience
$(document).on("click", "#deleteVolunteerExperience", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deletevolunteerexperience",
     method: 'post',
     data: {
       id : id ,
       },
     success: function(result){
       alert('success');

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// delete language
$(document).on("click", "#deleteLanguage", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deletelanguage",
     method: 'post',
     data: {
       id : id ,
    },
     success: function(result){
       alert('success');

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// delete project
$(document).on("click", "#deleteProject", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/deleteproject",
     method: 'post',
     data: {
       id : id ,
    },
     success: function(result){
       alert('success');

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });



// New Certification

$(document).on("click", "#addCertification", function(e){
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newcertification",
     method: 'post',
     data: {
       certification : $('#newCertification-certification').val(),
       issuing_organization : $('#newCertification-issuing-organization').val(),
       date_obtained : $('#newCertification-date-obtained').val(),
       expiry_date :$('#newCertification-expiry-date').val()
    },
     success: function(result){
       alert(result.user_certification.certification);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// New patent

$(document).on("click", "#addPatent", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newpatent",
     method: 'post',
     data: {
      title : $('#newPatent-title').val(),
      office : $('#newPatent-office').val(),
      status : $('#newPatent-status').val(),
      issue_date : $('#newPatent-issue-date').val(),
      description : $('#newPatent-description').val(),
    },
     success: function(result){
       alert(result.patent.title);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// New project

$(document).on("click", "#addProject", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newproject",
     method: 'post',
     data: {
      name : $('#newProject-name').val(),
      date_begin : $('#newProject-date-begin').val(),
      date_end : $('#newProject-date-end').val(),
      description : $('#newProject-description').val(),
    },
     success: function(result){
       alert(result.user_project.name);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// New course

$(document).on("click", "#addCourse", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newcourse",
     method: 'post',
     data: {
       name : $('#newCourse-name').val(),
     },
     success: function(result){
       alert(result.user_course.name);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// new language

$(document).on("click", "#addLanguage", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newlanguage",
     method: 'post',
     data: {
       language_id : $('#newLanguage-language-id').val(),
    },
     success: function(result){
       alert(result.user_language.id);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// new volunteer Experience

$(document).on("click", "#addVolunteerExperience", function(e){
  var id = $(this).data('id');
  e.preventDefault();
  $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
     }

  });
  jQuery.ajax({
     url: "/ajax/profile/newvolunteerexperience",
     method: 'post',
     data: {
      organisation :  $('#newVolunteerexperience-organisation').val(),
      role :  $('#newVolunteerexperience-role').val(),
      cause : $('#newVolunteerexperience-cause').val(),
      current : $('#newVolunteerexperience-current').val(),
      start_date :  $('#newVolunteerexperience-start-date').val(),
      end_date :  $('#newVolunteerexperience-end-date').val(),
      description : $('#newVolunteerexperience-description').val()
     },
     success: function(result){
       alert(result.volunteer_experience.organisation);

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

</script>

@endsection
