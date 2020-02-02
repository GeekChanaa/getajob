<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/******

DASHBOARD VIEWS

*******/

Route::get('/Dashboard','dashboard\dashboardController@index');


// Countries Routes
Route::get('/Dashboard/countries','dashboard\countriesController@list');
Route::get('/Dashboard/countries/create','dashboard\countriesController@create');
Route::get('/Dashboard/countries/statistics','dashboard\countriesController@statistics');
Route::post('/Dashboard/countries/add','dashboard\countriesController@add');
Route::delete('/Dashboard/countries/delete','dashboard\countriesController@delete');
Route::get('/Dashboard/countries/update/{id}','dashboard\countriesController@update');
Route::post('/Dashboard/countries/update','dashboard\countriesController@updat');

// Cities Routes
Route::get('/Dashboard/cities','dashboard\citiesController@list');
Route::get('/Dashboard/cities/create','dashboard\citiesController@create');
Route::get('/Dashboard/cities/statistics','dashboard\citiesController@statistics');
Route::post('/Dashboard/cities/add','dashboard\citiesController@add');
Route::delete('/Dashboard/cities/delete','dashboard\citiesController@delete');
Route::get('/Dashboard/cities/update/{id}','dashboard\citiesController@update');
Route::post('/Dashboard/cities/update','dashboard\citiesController@updat');

// Users Routes
Route::get('/Dashboard/users','dashboard\usersController@list');
Route::get('/Dashboard/users/create','dashboard\usersController@create');
Route::post('/Dashboard/users/add','dashboard\usersController@add');
Route::delete('/Dashboard/users/delete','dashboard\usersController@delete');
Route::get('/Dashboard/users/statistics','dashboard\usersController@statistics');
Route::get('/Dashboard/users/update/{id}','dashboard\usersController@update');
Route::post('/Dashboard/users/update','dashboard\usersController@updat');
Route::get('/Dashboard/users/show/{id}','dashboard\usersController@show');

// Skills Routes
Route::get('/Dashboard/skills','dashboard\skillsController@list');
Route::get('/Dashboard/skills/create','dashboard\skillsController@create');
Route::post('/Dashboard/skills/add','dashboard\skillsController@add');
Route::delete('/Dashboard/skills/delete','dashboard\skillsController@delete');
Route::get('/Dashboard/skills/statistics','dashboard\skillsController@statistics');
Route::get('/Dashboard/skills/update/{id}','dashboard\skillsController@update');
Route::post('/Dashboard/skills/update','dashboard\skillsController@updat');
Route::get('/Dashboard/skills/show/{id}','dashboard\skillsController@show');

// Skills Routes
Route::get('/Dashboard/domains','dashboard\domainsController@list');
Route::get('/Dashboard/domains/create','dashboard\domainsController@create');
Route::post('/Dashboard/domains/add','dashboard\domainsController@add');
Route::delete('/Dashboard/domains/delete','dashboard\domainsController@delete');
Route::get('/Dashboard/domains/statistics','dashboard\domainsController@statistics');
Route::get('/Dashboard/domains/update/{id}','dashboard\domainsController@update');
Route::post('/Dashboard/domains/update','dashboard\domainsController@updat');
Route::get('/Dashboard/domains/show/{id}','dashboard\domainsController@show');

// Enterprises Routes
Route::get('/Dashboard/enterprises','dashboard\enterprisesController@list');
Route::get('/Dashboard/enterprises/create','dashboard\enterprisesController@create');
Route::post('/Dashboard/enterprises/add','dashboard\enterprisesController@add');
Route::delete('/Dashboard/enterprises/delete','dashboard\enterprisesController@delete');
Route::get('/Dashboard/enterprises/update/{id}','dashboard\enterprisesController@update');
Route::post('/Dashboard/enterprises/update','dashboard\enterprisesController@updat');
Route::get('/Dashboard/enterprises/show/{id}','dashboard\enterprisesController@show');
Route::get('/Dashboard/enterprises/statistics','dashboard\enterprisesController@statistics');

// Schools Routes
Route::get('/Dashboard/schools','dashboard\schoolsController@list');
Route::get('/Dashboard/schools/create','dashboard\schoolsController@create');
Route::post('/Dashboard/schools/add','dashboard\schoolsController@add');
Route::delete('/Dashboard/schools/delete','dashboard\schoolsController@delete');
Route::get('/Dashboard/schools/update/{id}','dashboard\schoolsController@update');
Route::post('/Dashboard/schools/update','dashboard\schoolsController@updat');
Route::get('/Dashboard/schools/show/{id}','dashboard\schoolsController@show');
Route::get('/Dashboard/schools/statistics','dashboard\schoolsController@statistics');

// Languages Routes
Route::get('/Dashboard/languages','dashboard\languagesController@list');
Route::get('/Dashboard/languages/create','dashboard\languagesController@create');
Route::post('/Dashboard/languages/add','dashboard\languagesController@add');
Route::delete('/Dashboard/languages/delete','dashboard\languagesController@delete');
Route::get('/Dashboard/languages/statistics','dashboard\languagesController@statistics');
Route::get('/Dashboard/languages/update/{id}','dashboard\languagesController@update');
Route::post('/Dashboard/languages/update','dashboard\languagesController@updat');
Route::get('/Dashboard/languages/show/{id}','dashboard\languagesController@show');

// Certifications Routes
Route::get('/Dashboard/certifications','dashboard\certificationsController@list');
Route::get('/Dashboard/certifications/create','dashboard\certificationsController@create');
Route::post('/Dashboard/certifications/add','dashboard\certificationsController@add');
Route::delete('/Dashboard/certifications/delete','dashboard\certificationsController@delete');
Route::get('/Dashboard/certifications/statistics','dashboard\certificationsController@statistics');
Route::get('/Dashboard/certifications/update/{id}','dashboard\certificationsController@update');
Route::post('/Dashboard/certifications/update','dashboard\certificationsController@updat');
Route::get('/Dashboard/certifications/show/{id}','dashboard\certificationsController@show');

// Posts Routes
Route::get('/Dashboard/posts','dashboard\postsController@list');
Route::get('/Dashboard/posts/create','dashboard\postsController@create');
Route::post('/Dashboard/posts/add','dashboard\postsController@add');
Route::delete('/Dashboard/posts/delete','dashboard\postsController@delete');
Route::get('/Dashboard/posts/statistics','dashboard\postsController@statistics');
Route::get('/Dashboard/posts/update/{id}','dashboard\postsController@update');
Route::post('/Dashboard/posts/update','dashboard\postsController@updat');
Route::get('/Dashboard/posts/show/{id}','dashboard\postsController@show');

// Seminars Routes
Route::get('/Dashboard/seminars','dashboard\seminarsController@list');
Route::get('/Dashboard/seminars/create','dashboard\seminarsController@create');
Route::post('/Dashboard/seminars/add','dashboard\seminarsController@add');
Route::delete('/Dashboard/seminars/delete','dashboard\seminarsController@delete');
Route::get('/Dashboard/seminars/statistics','dashboard\seminarsController@statistics');
Route::get('/Dashboard/seminars/update/{id}','dashboard\seminarsController@update');
Route::post('/Dashboard/seminars/update','dashboard\seminarsController@updat');
Route::get('/Dashboard/seminars/show/{id}','dashboard\seminarsController@show');

// Trainings Routes
Route::get('/Dashboard/trainings','dashboard\trainingsController@list');
Route::get('/Dashboard/trainings/create','dashboard\trainingsController@create');
Route::post('/Dashboard/trainings/add','dashboard\trainingsController@add');
Route::delete('/Dashboard/trainings/delete','dashboard\trainingsController@delete');
Route::get('/Dashboard/trainings/statistics','dashboard\trainingsController@statistics');
Route::get('/Dashboard/trainings/update/{id}','dashboard\trainingsController@update');
Route::post('/Dashboard/trainings/update','dashboard\trainingsController@updat');
Route::get('/Dashboard/trainings/show/{id}','dashboard\trainingsController@show');

// Functions Routes
Route::get('/Dashboard/jfunctions','dashboard\jfunctionsController@list');
Route::get('/Dashboard/jfunctions/create','dashboard\jfunctionsController@create');
Route::post('/Dashboard/jfunctions/add','dashboard\jfunctionsController@add');
Route::delete('/Dashboard/jfunctions/delete','dashboard\jfunctionsController@delete');
Route::get('/Dashboard/jfunctions/statistics','dashboard\jfunctionsController@statistics');
Route::get('/Dashboard/jfunctions/update/{id}','dashboard\jfunctionsController@update');
Route::post('/Dashboard/jfunctions/update','dashboard\jfunctionsController@updat');
Route::get('/Dashboard/jfunctions/show/{id}','dashboard\jfunctionsController@show');

// Groups Routes
Route::get('/Dashboard/groups','dashboard\groupsController@list');
Route::delete('/Dashboard/groups/delete','dashboard\groupsController@delete');
Route::get('/Dashboard/groups/statistics','dashboard\groupsController@statistics');
Route::get('/Dashboard/groups/update/{id}','dashboard\groupsController@update');
Route::post('/Dashboard/groups/update','dashboard\groupsController@updat');
Route::get('/Dashboard/groups/show/{id}','dashboard\groupsController@show');

// Pages Routes
Route::get('/Dashboard/pages','dashboard\pagesController@list');
Route::delete('/Dashboard/pages/delete','dashboard\pagesController@delete');
Route::get('/Dashboard/pages/statistics','dashboard\pagesController@statistics');
Route::get('/Dashboard/pages/update/{id}','dashboard\pagesController@update');
Route::post('/Dashboard/pages/update','dashboard\pagesController@updat');
Route::get('/Dashboard/pages/show/{id}','dashboard\pagesController@show');


// Events Routes
Route::get('/Dashboard/events','dashboard\eventsController@list');
Route::delete('/Dashboard/events/delete','dashboard\eventsController@delete');
Route::get('/Dashboard/events/statistics','dashboard\eventsController@statistics');
Route::get('/Dashboard/events/update/{id}','dashboard\eventsController@update');
Route::post('/Dashboard/events/update','dashboard\eventsController@updat');
Route::get('/Dashboard/events/show/{id}','dashboard\eventsController@show');





/***********

MAIN
WEBSITE
ROUTES

***********/
Route::group(['middleware' => ['logged_in']], function () {
  Route::get('/groups','groupsController@groups');
  Route::get('/groups/group/{id}','groupsController@group');
  Route::get('/seminars','seminarsController@seminars');
  Route::get('/trainings','trainingsController@trainings');
  Route::get('/pages','pagesController@pages');
  Route::get('/pages/page/{id}','pagesController@page');
  Route::get('/events','eventsController@events');

  Route::get('/feed','mainController@feed');
  Route::post('/feed/add_post','postsController@add');
  Route::get('/feed/create_post','postsController@create');
  Route::get('/feed/post/{id}','postsController@show');

  Route::get('/feed/create_group','groupsController@create');
  Route::post('/feed/add_group','groupsController@add');
  Route::post('/feed/add_page','pagesController@add');
  Route::post('/feed/add_event','eventsController@add');
  Route::post('/feed/add_seminar','seminarsController@add');
  Route::post('/feed/add_training','trainingsController@add');
  Route::get('/feed/create_page','pagesController@create');
  Route::get('/feed/create_seminar','seminarsController@create');
  Route::get('/feed/create_training','trainingsController@create');
  Route::get('/feed/create_event','eventsController@create');

  // Feed ajax routes
  Route::post('/ajax/addcomment','postsController@addcomment');
  Route::post('/ajax/addpost','postsController@addpost');
  Route::post('/ajax/addreply','postsController@addreply');
  Route::post('/ajax/likepost','postsController@likepost');
  Route::post('/ajax/reportpost','postsController@reportpost');
  Route::post('/ajax/likecomment','postsController@likecomment');
  Route::post('/ajax/reportcomment','postsController@reportcomment');
  Route::post('/ajax/likereply','postsController@likereply');
  Route::post('/ajax/reportreply','postsController@reportreply');
  Route::post('/ajax/likeevent','eventsController@likeevent');
  Route::post('/ajax/interestedInEvent','eventsController@interestedInEvent');
  Route::post('/ajax/likePage','pagesController@likePage');
  Route::post('/ajax/followPage','pagesController@followPage');
  Route::post('/ajax/interestedInSeminar','seminarsController@interestedIn');
  Route::post('/ajax/interestedInTraining','trainingsController@interestedIn');


  /****

  User interface Routes

  *****/
  Route::get('/myprofile','profileController@user_interface');
  Route::post('/ajax/profile/newcertification','certificationsController@addAjax');
  Route::post('/ajax/profile/newlanguage','languagesController@addAjax');
  Route::post('/ajax/profile/newproject','projectsController@addAjax');
  Route::post('/ajax/profile/newcourse','coursesController@addAjax');
  Route::post('/ajax/profile/newpatent','patentsController@addAjax');
  Route::post('/ajax/profile/newvolunteerexperience','volunteerExperiencesController@addAjax');

  Route::post('/ajax/profile/deletecertification','certificationsController@deleteAjax');
  Route::post('/ajax/profile/deletelanguage','languagesController@deleteAjax');
  Route::post('/ajax/profile/deleteproject','projectsController@deleteAjax');
  Route::post('/ajax/profile/deletecourse','coursesController@deleteAjax');
  Route::post('/ajax/profile/deletepatent','patentsController@deleteAjax');
  Route::post('/ajax/profile/deletevolunteerexperience','volunteerExperiencesController@deleteAjax');
});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
