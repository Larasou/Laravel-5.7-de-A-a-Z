<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            "<h1>Aller a la plage</h1>",
            "<p>Aller faire les courses</p>",
            "<a>Aller au marché</a>",
            "<b>Aller au cinéma</b>",
        ];

        return view('welcome')
            ->withTasks($tasks)
            ->withNameNana('Soulouf');
    }

    public function contact() {
        return view('contact');
    }

    public function members() {
        return view('members');
    }
}
