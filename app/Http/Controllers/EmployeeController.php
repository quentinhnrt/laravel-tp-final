<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
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

        return view('employees.index', [
            'employees' => $employees
        ]);
    }

    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }
}
