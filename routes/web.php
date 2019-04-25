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
Route::get('/','pagecontroller@home');

Route::post('projects/{project}/tasks', 'projectTasksController@store');
Route::patch('/tasks/{task}','projectTasksController@update');
Route::resource('projects','projectcontroller'); 
Route::get('/login','pagecontroller@login');
Route::get('/aboutus','pagecontroller@aboutus');

//Route::get('/projects','projectcontroller@index');

//Route::get('/projects/create', 'projectcontroller@create');
//Route::get('/projects/{project}','projectcontroller@show');

//Route::post('/projects', 'projectcontroller@store');
//Route::get('/projects/{project}/edit','projectcontroller@edit');

//Route::patch('/projects/{project}','projectcontroller@update');
//Route::delete('/projects/{project}','projectcontroller@destroy');

