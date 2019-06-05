<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('meetups/{id}', 'EventsController@show')->name('events.show');

Route::get('events/category/{category}/{subcategory?}', 'EventsController@category');

Route::get('events', 'EventsController@index');