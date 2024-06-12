<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        return view('dashboard.projects.index', ['projects' => Project::paginate(6)]);
    }

    public function show(Project $project): View
    {
        return view('dashboard.projects.show', ['project' => $project]);
    }

    public function create(): View
    {
        return view('dashboard.projects.create');
    }

    public function store(ProjectRequest $request): RedirectResponse
    {
        $project = Project::create($request->validated());

        return redirect()->route('dashboard.projects.show', ['project' => $project->id])
            ->with('success', "Le projet a bien été créé");
    }

    public function edit(Project $project): View
    {
        return view('dashboard.projects.edit', ['project' => $project]);
    }

    public function update(ProjectRequest $request, Project $project): RedirectResponse
    {
        $validated = $request->validated();
        $project->update($validated);

        return redirect()->route('dashboard.projects.show', ['project' => $project->id])
            ->with('success', "Le projet a bien été modifié");
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('dashboard.projects.index')
            ->with('success', "Le projet a bien été supprimé");
    }
}
