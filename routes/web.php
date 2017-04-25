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
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Auth::routes();

Route::get('/home', 'DashboardController@index');

// Generic problems route
Route::get('problems', 
  ['as' => 'problems', 'uses' => 'ProblemController@index']);

// Route for viewing problems
Route::get('view-problem', 
  ['as' => 'view-problem', 'uses' => 'ProblemController@viewProblem']);

// Routes for creating problems
Route::get('create-problem', 
  ['as' => 'create-problem', 'uses' => 'ProblemController@addView']);
Route::post('create-problem', 
  ['as' => 'store-problem', 'uses' => 'ProblemController@add']);

// Route for deleting problems
Route::delete('delete-problem', 
  ['as' => 'delete-problem', 'uses' => 'ProblemController@delete']);

// Routes for updating problems
Route::get('update-problem', 
  ['as' => 'update-problem-view', 'uses' => 'ProblemController@updateView']);
Route::post('update-problem', 
  ['as' => 'update-problem', 'uses' => 'ProblemController@update']);