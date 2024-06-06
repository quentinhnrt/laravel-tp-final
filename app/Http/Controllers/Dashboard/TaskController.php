<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use Illuminate\View\View;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function show(Task $project): View
    {
        return view('dashboard.tasks.show', ['project' => $project]);
    }

    public function create(): View
    {
        return view('dashboard.tasks.create');
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $task = Task::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'project_id' => $validated['project_id'],
        ]);

        $task->employees()->attach($validated['developer_ids']);
        $task->employees()->attach($validated['project_manager_ids']);
        $task->tags()->attach($validated['natures_ids']);
        $task->tags()->attach($validated['status_id']);


        return redirect()->route('administration.projects.show', ['project' => $validated['project_id']])
            ->with('success', "Le projet a bien été créé");
    }

    public function edit(Task $project): View
    {
        return view('administration.tasks.edit', ['project' => $project]);
    }

    public function update(TaskRequest $request, Task $project): RedirectResponse
    {
        $validated = $request->validated();
        $project->update($validated);

        return redirect()->route('administration.projects.show', ['project' => $project->id])
            ->with('success', "Le projet a bien été modifié");
    }

    public function destroy(Task $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('administration.projects.index')
            ->with('success', "Le projet a bien été supprimé");
    }
}
