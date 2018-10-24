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
       $project = Project::create(request()->all());

        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project) {
        //$project = Project::find($id);

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit(Project $project) {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, Request $request) {
      $project->update($request->all());

        return redirect()->route('projects.show', $project);

    }

    public function destroy(Project $project) {
        $project->delete();

        return redirect('/');
    }
}
