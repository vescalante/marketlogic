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

Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@home');

Route::get('/bbn', 'PagesController@bbn');

Route::get('/weare/about', 'PagesController@about');

Route::get('/weare/clients', 'PagesController@clients');

Route::get('/weare/team', 'PagesController@team');

Route::get('/weare/contact', 'PagesController@contact');

Route::get('/here/americas', 'PagesController@americas');

Route::get('/here/global', 'PagesController@global');

Route::get('/foryou/ideas', 'PagesController@ideas');

Route::get('/foryou/services', 'PagesController@services');

Route::post('/ajaxRequest', 'PagesController@ajaxRequestPost');

Route::get('/foryou/cases', 'PagesController@cases');

Route::get('/foryou/blog', 'PagesController@blog');

Route::get('/thankyou', 'PagesController@thankyou');

Route::get('/foryou/ondemand', 'PagesController@ondemand');