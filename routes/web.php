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


/**
 * GET /projects (index)
 * GET /projects (create)
 * POST /projects (store)
 * GET /projects/1 (show)
 * GET /projects/1 (edit)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */
Route::resource('/projects', 'ProjectsController');
Route::get('/', 'ProjectsController@index')->name('projects');
/*Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::post('/projects', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
Route::patch('/projects/{project}', 'ProjectsController@update')->name('projects.update');
Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');
*/

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store')->name('tasks.store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
