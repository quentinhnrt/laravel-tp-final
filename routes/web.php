<?php

use Illuminate\Support\Facades\Route;

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
});
