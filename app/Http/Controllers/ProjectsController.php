<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::latest()->get();

        return view('projects.index')->withProjects($projects);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
       Project::create(request()->all());

        return redirect('/');
    }
}
