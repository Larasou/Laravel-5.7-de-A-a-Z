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

Route::get('/', function () {
    $tasks = [
        "<h1>Aller a la plage</h1>",
        "<p>Aller faire les courses</p>",
        "<a>Aller au marché</a>",
        "<b>Aller au cinéma</b>",
    ];

    return view('welcome')
        ->withTasks($tasks)
        ->withNameNana('Soulouf');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('members', function () {
    return view('members');
});
