<?php

use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\TaskController;
use App\Http\Middleware\DeveloperMiddleware;
use App\Http\Middleware\ProjectManagerMiddleware;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

// UI Kit
Route::get('uikit', function () {
    return view('uikit');
});

Route::prefix('developers')->name('developers.')->middleware(DeveloperMiddleware::class)->group(function () {
    Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
    Route::get('/{employee:slug}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('show');
});

Route::prefix('project-managers')->name('project-managers.')->middleware(ProjectManagerMiddleware::class)->group(function () {
    Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
    Route::get('/{employee:slug}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('show');
});

Route::prefix('administration')->name('administration.')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('index');

    Route::prefix('developers')->name('developers.')->middleware(DeveloperMiddleware::class)->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
        Route::get('/{employee:slug}', [EmployeeController::class, 'show'])->name('show');
        Route::delete('/{employee:id}', [EmployeeController::class, 'destroy'])->name('destroy');
        Route::get('/create', [EmployeeController::class, 'create'])->name('create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('store');
        Route::get('/edit/{employee:slug}', [EmployeeController::class, 'edit'])->name('edit');
        Route::put('/update/{employee:slug}', [EmployeeController::class, 'update'])->name('update');
    });

    Route::prefix('project-managers')->name('project-managers.')->middleware(ProjectManagerMiddleware::class)->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('index');
        Route::get('/{employee:slug}', [EmployeeController::class, 'show'])->name('show');
        Route::delete('/{employee:id}', [EmployeeController::class, 'destroy'])->name('destroy');
        Route::get('/create', [EmployeeController::class, 'create'])->name('create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('store');
        Route::get('/edit/{employee:slug}', [EmployeeController::class, 'edit'])->name('edit');
        Route::put('/update/{employee:slug}', [EmployeeController::class, 'update'])->name('update');
    });

    Route::prefix('/clients')->name('clients.')->controller(ClientController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store');
        Route::put('/{client}/edit', 'update')->name('update');
        Route::get('/{client}/edit', 'edit')->name('edit');
        Route::delete('/{client}/destroy', 'destroy')->name('destroy');
        Route::get('/{client}', 'show')->name('show');
    });

    Route::prefix('/projects')->name('projects.')->controller(ProjectController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store');
        Route::get('/{project}/edit', 'edit')->name('edit');
        Route::put('/{project}/edit', 'update')->name('update');
        Route::delete('/{project}/destroy', 'destroy')->name('destroy');
        Route::get('/{project}', 'show')->name('show');
    });

    Route::prefix('/tasks')->name('tasks.')->controller(TaskController::class)->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store');
        Route::get('/{task}/edit', 'edit')->name('edit');
        Route::put('/{task}/edit', 'update')->name('update');
        Route::delete('/{task}/destroy', 'destroy')->name('destroy');
        Route::get('/{task}', 'show')->name('show');
    });
});

Route::fallback(function () {
    return view('errors.404');
});
