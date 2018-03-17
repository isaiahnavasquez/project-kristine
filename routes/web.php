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

Route::get('/', 'PageController@login');
Route::get('/logout', 'PageController@logout');
Route::get('/accounts/add', 'AccountsController@addUser');
Route::get('/accounts/logs', 'AccountsController@getUserLogs');
Route::get('/dashboard', 'PageController@dashboard');
Route::get('/accounts/list', 'PageController@accountsList');
Route::get('/accounts/view/{username}', 'PageController@viewProfile');
Route::get('/files/upload', 'FilesController@setUpload');
Route::get('/files/search', 'FilesController@getSearchPage');
Route::get('/files/view/{fileset}', 'FilesController@viewFileSet');

Route::post('/login', 'PageController@attempt');
Route::post('/accounts/add', 'AccountsController@create');
Route::post('/files/upload', 'FilesController@uploadFiles');
Route::post('/files/search', 'FilesController@runSearch');
