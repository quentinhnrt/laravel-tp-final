<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $role = $request->attributes->get('role');

        if ($role === Employee::DEVELOPER_ROLE) {
            $employees = Employee::developers()->paginate(6);
        } elseif ($role === Employee::PROJECT_MANAGER_ROLE) {
            $employees = Employee::projectManagers()->paginate(6);
        } else {
            $employees = Employee::paginate(6);
        }

        return view('dashboard.employees.index', [
            'employees' => $employees
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employees.show', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('dashboard.employees.create', [
            'role' => $request->attributes->get('role') ?? Employee::DEVELOPER_ROLE
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEmployeeRequest $request)
    {
        Employee::create($request->validated());

        $role = $request->attributes->get('role');

        if ($role === Employee::DEVELOPER_ROLE) {
            return redirect()->route('dashboard.developers.index');
        } elseif ($role === Employee::PROJECT_MANAGER_ROLE) {
            return redirect()->route('dashboard.project-managers.index');
        } else {
            return redirect()->route('dashboard.developers.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        $role = $request->attributes->get('role');

        if ($role === Employee::DEVELOPER_ROLE) {
            return redirect()->route('dashboard.developers.index');
        } elseif ($role === Employee::PROJECT_MANAGER_ROLE) {
            return redirect()->route('dashboard.project-managers.index');
        } else {
            return redirect()->route('dashboard.developers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
