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

Route::get('/', function () {
    return view('welcome');
});

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


/***********

MAIN
WEBSITE
ROUTES

***********/
Route::group(['middleware' => ['logged_in']], function () {
  Route::get('/feed','mainController@feed');
  Route::post('/feed/add_post','postsController@add');
  Route::get('/feed/create_post','postsController@create');
  Route::post('/ajax/addcomment','postsController@addcomment');
  Route::post('/ajax/addpost','postsController@addpost');
  Route::post('/ajax/addreply','postsController@addreply');
  Route::get('/feed/create_group','groupsController@create');
  Route::post('/feed/add_group','groupsController@add');
});

//Posts Views


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
