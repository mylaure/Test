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

Route::get('about', 'PagesController@getAbout');
Route::get('service', 'PagesController@getService');
Route::get('membership', 'PagesController@getMembership');
Route::get('event', 'PagesController@getEvent');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

// for Homepage
Route::get('/', 'HomeController@index');

Route::get('events/{id}', 'EventsController@show');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('events', 'EventsController');
});

Route::get('mail/send','MailController@send');