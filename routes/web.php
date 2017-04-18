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

// Route::get('/problems', 'ProblemController@index');

Route::get('problems', 
  ['as' => 'problems', 'uses' => 'ProblemController@index']);
Route::get('create-problem', 
  ['as' => 'create-problem', 'uses' => 'ProblemController@addView']);
Route::post('create-problem', 
  ['as' => 'store-problem', 'uses' => 'ProblemController@add']);
Route::delete('delete-problem', 
  ['as' => 'delete-problem', 'uses' => 'ProblemController@delete']);
