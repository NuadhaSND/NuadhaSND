<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'PublicationsController@home');

Route::get('/modal', 'PublicationsController@modal');

Route::get('/publications', 'PublicationsController@index');

Route::get('/publications/{publication}', 'PublicationsController@show');


Route::post('/publications/new', 'PublicationsController@new');

Route::match(['get', 'post'], '/publications/edit/{publication}', 'PublicationsController@edit');

Route::match(['get', 'post'], '/publications/delete/{publication}', 'PublicationsController@delete');

Route::post('/publications/{publication}/comment', 'CommentsController@new');




