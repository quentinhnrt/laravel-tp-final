<?php

use App\Http\Controllers\Dashboard\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ClientController;

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


Route::fallback(function () {
    return view('errors.404');
});

Route::prefix('/clients')->name('clients.')->controller(ClientController::class)->group(function () {

    Route::get('/', 'index')->name('index');

    Route::get('/create', 'create')->name('create');

    Route::post('/create', 'store');

    Route::get('/{client}/edit', 'edit')->name('edit');

    Route::put('/{post:slug}/edit', 'update')->name('update');

    Route::delete('/{client}/destroy', 'destroy')->name('destroy');

    Route::get('/{client}', 'show')->name('show');

});
