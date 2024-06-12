<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Accueil', route('home'));
});

// Home > Clients
Breadcrumbs::for('clients', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Clients', route('dashboard.clients.index'));
});

// Home > Clients > [Client]
Breadcrumbs::for('dashboard.clients.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('clients');
    $trail->push($variable->name, route('dashboard.clients.show', $variable));
});

// Home > Projects
Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Projets', route('dashboard.projects.index'));
});

// Home > Projects > [Project]
Breadcrumbs::for('dashboard.projects.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('projects');
    $trail->push($variable->name, route('dashboard.projects.show', $variable));
});

// Home > Developers
Breadcrumbs::for('developers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Développeurs', route('developers.index'));
});

// Home > Developers > [Developer]
Breadcrumbs::for('developers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('developers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('developers.show', $variable));
});

// Home > Project managers
Breadcrumbs::for('project-managers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Chefs de projet', route('project-managers.index'));
});

// Home > Project managers > [Project managers]
Breadcrumbs::for('project-managers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('project-managers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('project-managers.show', $variable));
});

// dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard.index'));
});

// dashboard > Developers
Breadcrumbs::for('dashboard.developers', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Développeurs', route('dashboard.developers.index'));
});

Breadcrumbs::for('dashboard.developers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.developers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('developers.show', $variable));
});

// dashboard > Developers > Create
Breadcrumbs::for('dashboard.developers.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.developers');
    $trail->push('Ajout', route('dashboard.developers.create'));
});

// dashboard > Developers > [Developer]
Breadcrumbs::for('dashboard.developers.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.developers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('dashboard.developers.edit', $variable));
});

// dashboard > Project managers
Breadcrumbs::for('dashboard.project-managers', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Chefs de projet', route('dashboard.project-managers.index'));
});

Breadcrumbs::for('dashboard.project-managers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.project-managers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('project-managers.show', $variable));
});

// dashboard > Project managers > Create
Breadcrumbs::for('dashboard.project-managers.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.project-managers');
    $trail->push('Ajout', route('dashboard.project-managers.create'));
});

// dashboard > Project managers > [Project managers]
Breadcrumbs::for('dashboard.project-managers.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.project-managers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('dashboard.project-managers.edit', $variable));
});

// dashboard > Projects
Breadcrumbs::for('dashboard.projects', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Projets', route('dashboard.projects.index'));
});

// dashboard > Projects > Create
Breadcrumbs::for('dashboard.projects.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.projects');
    $trail->push('Ajout', route('dashboard.projects.create'));
});

// dashboard > Projects > [Project]
Breadcrumbs::for('dashboard.projects.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.projects');
    $trail->push($variable->name, route('dashboard.projects.edit', $variable));
});

// dashboard > Clients
Breadcrumbs::for('dashboard.clients', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Clients', route('dashboard.clients.index'));
});

// dashboard > Clients > Create
Breadcrumbs::for('dashboard.clients.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.clients');
    $trail->push('Ajout', route('dashboard.clients.create'));
});

// dashboard > Clients > [Project]
Breadcrumbs::for('dashboard.clients.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.clients');
    $trail->push($variable->name, route('dashboard.clients.edit', $variable));
});

// dashboard > Task
Breadcrumbs::for('dashboard.tasks', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Tâche', route('dashboard.tasks.create'));
});

// dashboard > Task > Create
Breadcrumbs::for('dashboard.tasks.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.tasks');
    $trail->push('Ajout', route('dashboard.tasks.create'));
});

// dashboard > Task > [Task]
Breadcrumbs::for('dashboard.tasks.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.tasks');
    $trail->push($variable->name, route('dashboard.tasks.edit', $variable));
});

Breadcrumbs::for('dashboard.tasks.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('dashboard.tasks');
    $trail->push($variable->name . ' ' . $variable->project->name, route('dashboard.tasks.show', $variable));
});
