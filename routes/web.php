<?php

use App\Http\Controllers\Dashboard\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(Employee::developers()->get());
    $dev = Employee::create([
        'firstname' => 'John',
        'lastname' => 'Doe',
        'function' => 'Developer',
        'role' => Employee::DEVELOPER_ROLE,
    ]);

    $pm = Employee::create([
        'firstname' => 'Jane',
        'lastname' => 'Doe',
        'function' => 'Project Manager',
        'role' => Employee::PROJECT_MANAGER_ROLE,
    ]);

    $dev->tasks()->create([]);

    $pm->tasks()->create([]);

    $pm->projects()->create([]);

    return view('welcome');
});

Route::get('/developers', function () {
    return 'Developers';
})->name('developers');

Route::get('/developers/{name}', function ($name) {
    return 'Developer: ' . $name;
})->name('developers.detail');

Route::get('/project-managers', function () {
    return 'Project Managers';
})->name('project-managers');

Route::get('/project-managers/{name}', function ($name) {
    return 'Project Manager: ' . $name;
})->name('project-managers.detail');

Route::prefix('administration')->name('administration.')->group(function () {
    Route::prefix('developers')->name('developers.')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
        Route::delete('/{employee:id}', [EmployeeController::class, 'destroy'])->name('destroy');

        Route::get('/{name}', function ($name) {
            return 'Developer administration: ' . $name;
        })->name('detail');
    });

    Route::prefix('project-managers')->name('project-managers.')->group(function () {
        Route::get('/', function () {
            return 'Project Managers administration';
        })->name('index');

        Route::get('/{name}', function ($name) {
            return 'Project Manager administration: ' . $name;
        })->name('detail');
    });
});
