@extends('layouts.main')


@section('content')

<!-- Button trigger modal -->
<div class="profile-wrapper">
  <div class="main-content">
    <div class="usr-cover">
      <div class="usr-avatar">
        A
      </div>
    </div>
    <div class="usr-section">
      <h4>Informations</h4>
      <div class="line"></div>
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
    <div class="usr-section">
      <h4>Certifications</h4>
      <div class="line"></div>
      <div id="certifications" class="certifications">
        @foreach($list_certifications as $certification)
        <div class="cert-group">
          <div class="certification">
            <span>{{$certification->certification}}</span>
            <span style="font-size: 0.8rem;font-weight:600">{{substr($certification->date_obtained,0,4)}}</span>
          </div>
          <button class="" id="deleteCertification" data-id="{{$certification->id}}">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
            	<g>
            		<g>
            			<g>
            				<path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/>
            				<polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/>
            			</g>
            		</g>
            	</g>
            </svg>
          </button>
        </div>
        @endforeach
      </div>
    </div>

    <div class="usr-section">
      <h4>Volunteer Experiences</h4>
      <div class="line"></div>
      <div id="volunteer_experiences" class="certifications">
        @foreach($list_volunteer_experiences as $volunteer_experience)
        <div class="cert-group">
          <div class="certification">
            <span>{{$volunteer_experience->role}}</span>
            <span style="font-size: 0.8rem;font-weight:600">{{$volunteer_experience->organisation}}</span>
          </div>
          <button class="" id="deleteVolunteerExperience" data-id="{{$volunteer_experience->id}}">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
            	<g>
            		<g>
            			<g>
            				<path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/>
            				<polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/>
            			</g>
            		</g>
            	</g>
            </svg>
          </button>
        </div>
        @endforeach
      </div>
    </div>

    <div class="usr-section">
      <h4>Courses</h4>
      <div class="line"></div>
      <div id="courses" class="courses">
        @foreach($list_courses as $course)
        <div class="course">
          <span>{{$course->name}}</span>
          <button id="deleteCourse" data-id="{{$course->id}}">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/>
                  <polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/>
                </g>
              </g>
            </g>
          </svg>
        </button>
      </div>
      @endforeach
      </div>
    </div>
    <div id="projects" class="usr-section">
      <h4>Projects</h4>
      <div class="line"></div>
      @foreach($list_projects as $project)
      <div class="cert-group">
        <div class="certification">
          <span>{{$project->name}}</span>
          <span style="font-size: 0.8rem;font-weight:600">{{substr($project->date_begin,0,4)}}</span>
        </div>
        <button class="" id="deleteProject" data-id="{{$project->id}}">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/>
                  <polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/>
                </g>
              </g>
            </g>
          </svg>
        </button>
      </div>
      @endforeach
    </div>
    <div id="languages" class="usr-section">
      <h4>Languages</h4>
      <div class="line"></div>
      @foreach($list_languages as $language)
      <div class="cert-group">
        <div class="certification">
          <span>{{$language->language->name}}</span>
          <span style="font-size: 0.8rem;font-weight:600">intermediate</span>
        </div>
        <button class="" id="deleteLanguage" data-id="{{$language->id}}">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/>
                  <polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/>
                </g>
              </g>
            </g>
          </svg>
        </button>
      </div>
      @endforeach
    </div>
  </div>
  <div class="right-side">
    <button type="button" class="" data-toggle="modal" data-target="#new-certification">
      New certification
    </button>
    <button type="button" class="" data-toggle="modal" data-target="#new-volunteer-experience">
      New volunteer experience
    </button>
    <button type="button" class="" data-toggle="modal" data-target="#new-patent">
      New Patent
    </button>
    <button type="button" class="" data-toggle="modal" data-target="#new-course">
      New Course
    </button>
    <button type="button" class="" data-toggle="modal" data-target="#new-project">
      New Project
    </button>
    <button type="button" class="" data-toggle="modal" data-target="#new-language">
      New Language
    </button>
  </div>
</div>

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
        <button type="button" id="addCertification" data-dismiss="modal" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" id="addVolunteerExperience" data-dismiss="modal" class="btn btn-primary">add</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" id="addPatent" data-dismiss="modal" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="addCourse">Add</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" id="addProject" data-dismiss="modal" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

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
        <button type="button" id="addLanguage" data-dismiss="modal" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
// Delete Certification

$(document).on("click", "#deleteCertification", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();
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
       tonone.css("display",'none');

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// Delete course

$(document).on("click", "#deleteCourse", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();
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
       tonone.css("display","none");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// delete patent
$(document).on("click", "#deletePatent", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();
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
       tonone.css("display","none");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// delete volunteer experience
$(document).on("click", "#deleteVolunteerExperience", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();
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
       tonone.css("display","none");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

// delete language
$(document).on("click", "#deleteLanguage", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();

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
       tonone.css("display","none");

     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });


// delete project
$(document).on("click", "#deleteProject", function(e){
  var id = $(this).data('id');
  var tonone = $(this).parent();
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
       tonone.css("display","none");

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
       $('#certifications').prepend('<div class="cert-group"><div class="certification"><span>'+result.user_certification.certification+'</span><span style="font-size: 0.8rem;font-weight:600">'+result.user_certification.date_obtained+'</span></div><button class="" id="deleteCertification" data-id="'+result.user_certification.id+'"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve"><g><g><g><path d="M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z"/><polygon points="266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			"/></g></g></g></svg></button></div>')

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
       $("#projects").append("<div class='cert-group'><div class='certification'><span>"+result.user_project.name+"</span><span style='font-size: 0.8rem;font-weight:600'>qsd</span></div><button class='' id='deleteProject' data-id='"+result.user_project.id+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'viewBox='0 0 384 384' style='enable-background:new 0 0 384 384;' xml:space='preserve'><g><g><g><path d='M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z'/><polygon points='266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			'/></g></g></g></svg></button></div>");

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
       $("#courses").append("<div class='cert-group'><div class='certification'><span>"+result.user_course.name+"</span></div><button class='' id='deleteCourse' data-id='"+result.user_course.id+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'viewBox='0 0 384 384' style='enable-background:new 0 0 384 384;' xml:space='preserve'><g><g><g><path d='M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z'/><polygon points='266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			'/></g></g></g></svg></button></div>");


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
       $("#languages").append("<div class='cert-group'><div class='certification'><span>"+result.user_language.language.name+"</span><span style='font-size: 0.8rem;font-weight:600'>qsd</span></div><button class='' id='deleteLanguage' data-id='"+result.user_language.id+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'viewBox='0 0 384 384' style='enable-background:new 0 0 384 384;' xml:space='preserve'><g><g><g><path d='M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z'/><polygon points='266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			'/></g></g></g></svg></button></div>");


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
       $('#volunteer_experiences').prepend("<div class='cert-group'><div class='certification'><span>"+result.volunteer_experience.role+"</span><span style='font-size: 0.8rem;font-weight:600'>"+result.volunteer_experience.organisation+"</span></div><button class='' id='deleteVolunteerExperience' data-id='"+result.volunteer_experience.id+"'><svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'viewBox='0 0 384 384' style='enable-background:new 0 0 384 384;' xml:space='preserve'><g><g><g><path d='M64,341.333C64,364.907,83.093,384,106.667,384h170.667C300.907,384,320,364.907,320,341.333v-256H64V341.333z'/><polygon points='266.667,21.333 245.333,0 138.667,0 117.333,21.333 42.667,21.333 42.667,64 341.333,64 341.333,21.333 			'/></g></g></g></svg></button></div>")
     },
     error: function(jqXHR, textStatus, errorThrown){
       alert('error');
   }});
  });

</script>

@endsection
