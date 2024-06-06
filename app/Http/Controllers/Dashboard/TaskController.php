<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use Illuminate\View\View;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function show(Task $task): View
    {
        return view('dashboard.tasks.show', ['task' => $task]);
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

        if (isset($validated['developer_ids'])) {
            $task->employees()->attach($validated['developer_ids']);
        }

        if (isset($validated['project_manager_ids'])) {
            $task->employees()->attach($validated['project_manager_ids']);
        }

        if (isset($validated['natures_ids'])) {
            $task->tags()->attach($validated['natures_ids']);
        }

        if (isset($validated['status_id'])) {
            $task->tags()->attach($validated['status_id']);
        }

        return redirect()->route('administration.projects.show', ['project' => $validated['project_id']])
            ->with('success', "Le projet a bien été créé");
    }

    public function edit(Task $task): View
    {
        return view('dashboard.tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, Task $task): RedirectResponse
    {
        $validated = $request->validated();

        $task->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'project_id' => $validated['project_id'],
        ]);

        if (!isset($validated['developer_ids'])) {
            $validated['developer_ids'] = [];
        }

        if (!isset($validated['project_manager_ids'])) {
            $validated['project_manager_ids'] = [];
        }

        if (!isset($validated['natures_ids'])) {
            $validated['natures_ids'] = [];
        }

        if (!isset($validated['status_id'])) {
            $validated['status_id'] = [];
        }

        $tags = array_merge($validated['natures_ids'], [$validated['status_id']]);
        $employees = array_merge($validated['developer_ids'], $validated['project_manager_ids']);

        $task->tags()->sync($tags);
        $task->employees()->sync($employees);

        return redirect()->route('administration.projects.show', ['project' => $validated['project_id']])
            ->with('success', "Le projet a bien été modifié");
    }

    public function destroy(Task $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('administration.projects.index')
            ->with('success', "Le projet a bien été supprimé");
    }
}
