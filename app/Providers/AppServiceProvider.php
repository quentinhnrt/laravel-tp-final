<?php

namespace App\Providers;

use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Employee;
use App\Models\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer('dashboard.employees.form', function (View $view) {
            $role = request()->attributes->get('role');
            $data = $view->getData();
            $employee = null;

            if (isset($data['employee'])) {
                $employee = $data['employee'];
            }

            // set action based on if the employee is being created or updated and the role
            $action = route('dashboard.developers.store');
            if ($employee) {
                if ($employee->role === Employee::DEVELOPER_ROLE) {
                    $action = route('dashboard.developers.update', $employee);
                } elseif ($employee->role === Employee::PROJECT_MANAGER_ROLE) {
                    $action = route('dashboard.project-managers.update', $employee);
                }
            } else {
                if ($role === Employee::DEVELOPER_ROLE) {
                    $action = route('dashboard.developers.store');
                } elseif ($role === Employee::PROJECT_MANAGER_ROLE) {
                    $action = route('dashboard.project-managers.store');
                }
            }

            $view->with('action', $action);
        });

        \Illuminate\Support\Facades\View::composer('dashboard.projects.form', function (View $view) {
            $clients = \App\Models\Client::all();
            $projectManagers = Employee::projectManagers()->get();

            $view->with('clients', $clients);
            $view->with('projectManagers', $projectManagers);
        });

        \Illuminate\Support\Facades\View::composer('dashboard.tasks.form', function (View $view) {
            $projectManagers = Employee::projectManagers()->get();
            $developers = Employee::developers()->get();
            $projects = \App\Models\Project::all();
            $natureTags = Tag::nature()->get();
            $statusTags = Tag::status()->get();

            $view->with('projectManagers', $projectManagers);
            $view->with('developers', $developers);
            $view->with('projects', $projects);
            $view->with('natureTags', $natureTags);
            $view->with('statusTags', $statusTags);
        });
    }
}
