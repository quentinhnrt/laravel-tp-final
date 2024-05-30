<?php

namespace App\Providers;

use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Employee;

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
            $action = route('administration.developers.store');
            if ($employee) {
                if ($employee->role === Employee::DEVELOPER_ROLE) {
                    $action = route('administration.developers.update', $employee);
                } elseif ($employee->role === Employee::PROJECT_MANAGER_ROLE) {
                    $action = route('administration.project-managers.update', $employee);
                }
            } else {
                if ($role === Employee::DEVELOPER_ROLE) {
                    $action = route('administration.developers.store');
                } elseif ($role === Employee::PROJECT_MANAGER_ROLE) {
                    $action = route('administration.project-managers.store');
                }
            }

            $view->with('action', $action);
        });
    }
}
