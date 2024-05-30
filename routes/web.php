<?php

use App\Http\Controllers\Dashboard\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('developers')->name('developers.')->group(function () {
    Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
    Route::get('/{employee:slug}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('show');
});


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
        Route::get('/create', [EmployeeController::class, 'create'])->name('create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('store');
        Route::get('/edit/{employee:slug}', [EmployeeController::class, 'edit'])->name('edit');
        Route::put('/update/{employee:slug}', [EmployeeController::class, 'update'])->name('update');

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
