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


Route::controller('issue', 'IssueController');
Route::controller('project', 'ProjectController');
Route::controller('comment', 'CommentController');
Route::controller('/', 'HomeController');

View::share('projects', Project::all());
