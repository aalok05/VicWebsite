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
    return view('vic.index');
});

Route::get('/home', 'HomeController@index')->name('home');




Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/ideasubmission', 'HomeController@ideasubmission')->name('ideasubmission');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/howitworks', 'HomeController@howitworks')->name('howitworks');
Route::get('/partners', 'HomeController@partners')->name('partners');
Route::get('/teams', 'HomeController@teams')->name('teams');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/references', 'HomeController@references')->name('references');
Route::get('/downloads', 'HomeController@downloads')->name('downloads');


Auth::routes();

Route::post('/ideas.store','IdeasController@store')->name('ideas.store');

Route::group( ['middleware' => 'auth' ,], function()
{



Route::get('/userhome', 'HomeController@userhome')->name('userhome');

Route::get('/admins', 'AdminController@admin')->name('admins')->middleware('isAdmin');



Route::group(['middleware' => 'prevent-back-history'],function(){
//ideas
Route::get('/ideas', 'IdeasController@index')->name('ideas.index')->middleware('isAdmin');
 
Route::get('/ideas/create  ', 'IdeasController@create')->name('ideas.create')->middleware('isAdmin');
Route::post('/ideas/{idea}', 'IdeasController@update')->name('ideas.update')->middleware('isAdmin');
Route::delete('/ideas/{idea}', 'IdeasController@destroy')->name('ideas.destroy')->middleware('isAdmin');
Route::get('/ideas/{idea}', 'IdeasController@show')->name('ideas.show')->middleware('isAdmin');
Route::get('/ideas/{idea}/edit', 'IdeasController@edit')->name('ideas.edit')->middleware('isAdmin');

//users
Route::get('/users', 'UserController@index')->name('users.index')->middleware('isAdmin');
 
//Route::get('/users/create  ', 'IdeasController@create')->name('users.create')->middleware('isAdmin');
//Route::post('/users/{id}', 'UserController@update')->name('users.update')->middleware('isAdmin');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy')->middleware('isAdmin');
Route::get('/users/{id}', 'UserController@show')->name('users.show')->middleware('isAdmin');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit')->middleware('isAdmin');



});
});