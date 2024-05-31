<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ClientController;

Route::get('/', function () {
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
    Route::prefix('/clients')->name('clients.')->controller(ClientController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store');
        Route::put('/{client}/edit', 'update')->name('update');
        Route::get('/{client}/edit', 'edit')->name('edit');
        Route::delete('/{client}/destroy', 'destroy')->name('destroy');
        Route::get('/{client}', 'show')->name('show');
    
    });
});