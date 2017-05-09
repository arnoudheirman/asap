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

/***Routes for creating reports****/

Route::get('/', 'HomeController@index');
Route::get('/create-assessment', 'ReportController@index');

Route::get('/admin/assessment/create', 'Admin\AssessmentsController@create');
Route::post('/admin/assessment', 'Admin\AssessmentsController@store');

//Route::post('/create-assesment', 'ReportController@create');

//Route::get('/filter', 'ReportController@filter');