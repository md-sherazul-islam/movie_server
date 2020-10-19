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
    return view('index');
});

Auth::routes();
Route::get('/','movieController@index');

Route::middleware(['auth'])->group(function(){


	Route::get('/upload','movieController@create')->name('/upload');

	Route::post('/store','movieController@store')->name('/store');
  Route::get('/requests','requestController@index');
  Route::resource('slides','slideController');

});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search/{query?}','movieController@search');

Route::get('/movies/english','movieController@english')->name('/movies/english');

Route::get('/movies/hindi','movieController@hindi')->name('/movies/hindi');

Route::get('/movies/bangla','movieController@bangla')->name('/movies/bangla');

//Route::get('/deleteMovie/{id}','movieController@deleteMovie');

Route::resource('movies','movieController');
Route::resource('requests','requestController');
Route::post('/request','requestController@store');

//Route::get('movies/{movie}','movieController@show');
