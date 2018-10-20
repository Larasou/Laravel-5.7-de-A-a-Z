<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::get();

        return view('projects.index')->withProjects($projects);
    }
}
