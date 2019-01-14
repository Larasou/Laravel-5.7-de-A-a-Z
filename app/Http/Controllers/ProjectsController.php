<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['confirmed'])->except(['index', 'show']);
    }

    public function index()
    {

        $projects = Project::latest()->get();

        return view('projects.index')->withProjects($projects);
    }

    public function create()
    {
        return view('projects.create', ['project' => new Project()]);
    }

    public function store(ProjectRequest $request)
    {
        $project = auth()->user()->projects()->create($request->all());

        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project)
    {
        //$project = Project::find($id);

        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, ProjectRequest $request)
    {
        $project->update($request->all());

        return redirect()
            ->route('projects.show', $project)
            ->with([
                'color' => 'orange',
               // 'title' => "Projet mise à jour!",
                'message' => "Le projet {$project->name} a bien été mise à jour!",
            ]);

    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/');
    }
}
