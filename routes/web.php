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

Route::get('/', 'ProjectsController@index')->name('projects');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginsController@create')->name('login');
    Route::post('login', 'LoginsController@store');
    Route::get('logout', 'LoginsController@destroy')->name('logout');

    Route::get('register', 'RegistersController@create')->name('register');
    Route::post('register', 'RegistersController@store');

    Route::get('confirmation/{user}/{token}', 'ConfirmationsController@store')->name('confirmation');

    Route::get('forget', 'ForgetController@create')->name('forget');
    Route::post('forget', 'ForgetController@store');

    Route::get('reset/{user}/{token}', 'ResetController@create')->name('reset');
    Route::post('reset/{user}/{token}', 'ResetController@store');
});


Route::group(['prefix' => 'projects'], function () {
    Route::get('', 'ProjectsController@index')->name('projects.index');
    Route::get('create', 'ProjectsController@create')->name('projects.create');
    Route::post('', 'ProjectsController@store')->name('projects.store');
    Route::get('{project}', 'ProjectsController@show')->name('projects.show');
    Route::get('{project}/edit', 'ProjectsController@edit')->name('projects.edit');
    Route::put('{project}', 'ProjectsController@update')->name('projects.update');
    Route::delete('{project}', 'ProjectsController@destroy')->name('projects.destroy');

});


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store')->name('tasks.store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
