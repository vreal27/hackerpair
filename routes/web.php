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


Route::view('about', 'about.index')->name('about.index');
Route::view('about/book', 'about.book')->name('about.book');
Route::view('about/faq', 'about.faq')->name('about.faq');
Route::view('about/privacy', 'about.privacy')->name('about.privacy');
Route::view('about/tos', 'about.tos')->name('about.tos');

Route::view('contact', 'contact.index')->name('contact.index');

Route::get('meetups/{id}', 'EventsController@show')->name('events.show');
Route::get('events/category/{category}/{subcategory?}', 'EventsController@category');
Route::get('events', 'EventsController@index');

Route::get('languages', 'LanguagesController@index')->name('languages.index');
Route::get('locations', 'LocationsController@index')->name('locations.index');
Route::get('map', 'MapsController@index')->name('maps.index');

Auth::routes();