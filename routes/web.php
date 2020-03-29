<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/menu', 'PagesController@menu')->name('pages.menu');
Route::get('/events', 'PagesController@events')->name('pages.events');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

Route::resource('events', 'EventsController')->except(['index', 'create', 'edit']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
