<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('home.index');
});

/*
Route::model('design','Design');
Route::get('designs/{design}', function(Design $design){
	return $design;
});*/
Route::resource('projects', 'ProjectsController');

Route::resource('users', 'UsersController');

Route::resource('designs', 'DesignsController');