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


Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginsController@create')->name('login');
    Route::post('login', 'LoginsController@store');
    Route::get('logout', 'LoginsController@destroy')->name('logout');
});


Route::resource('/projects', 'ProjectsController');
Route::get('/', 'ProjectsController@index')->name('projects');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store')->name('tasks.store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
