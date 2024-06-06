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
    $trail->parent('home');
    $trail->push('Les clients', route('administration.clients.index'));
});

// Home > Clients > [Client]
Breadcrumbs::for('clients.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('clients');
    $trail->push($variable->name, route('administration.clients.show', $variable));
});

// Home > Projects
Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Les projets', route('administration.projects.index'));
});

// Home > Projects > [Project]
Breadcrumbs::for('administration.projects.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('projects');
    $trail->push($variable->name, route('administration.projects.show', $variable));
});

// Home > Developers
Breadcrumbs::for('developers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Les développeurs', route('developers.index'));
});

// Home > Developers > [Developer]
Breadcrumbs::for('developers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('developers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('developers.show', $variable));
});

// Home > Project managers
Breadcrumbs::for('project-managers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Les chefs de projet', route('project-managers.index'));
});

// Home > Project managers > [Project managers]
Breadcrumbs::for('project-managers.show', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('project-managers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('project-managers.show', $variable));
});

// Administering
Breadcrumbs::for('administration', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Administration', route('home'));
});

// Administering > Developers
Breadcrumbs::for('administration.developers', function (BreadcrumbTrail $trail) {
    $trail->parent('administration');
    $trail->push('Les développeurs', route('administration.developers.index'));
});

// Administering > Developers > Create
Breadcrumbs::for('administration.developers.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administration.developers');
    $trail->push('Ajout d\'un développeur', route('administration.developers.create'));
});

// Administering > Developers > [Developer]
Breadcrumbs::for('administration.developers.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('administration.developers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('administration.developers.edit', $variable));
});

// Administering > Project managers
Breadcrumbs::for('administration.project-managers', function (BreadcrumbTrail $trail) {
    $trail->parent('administration');
    $trail->push('Les chefs de projet', route('administration.project-managers.index'));
});

// Administering > Project managers > Create
Breadcrumbs::for('administration.project-managers.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administration.project-managers');
    $trail->push('Ajout d\'un chef de projet', route('administration.project-managers.create'));
});

// Administering > Project managers > [Project managers]
Breadcrumbs::for('administration.project-managers.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('administration.project-managers');
    $trail->push($variable->firstname . ' ' . $variable->lastname, route('administration.project-managers.edit', $variable));
});

// Administering > Projects
Breadcrumbs::for('administration.projects', function (BreadcrumbTrail $trail) {
    $trail->parent('administration');
    $trail->push('Les projets', route('administration.projects.index'));
});

// Administering > Projects > Create
Breadcrumbs::for('administration.projects.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administration.projects');
    $trail->push('Création', route('administration.projects.create'));
});

// Administering > Projects > [Project]
Breadcrumbs::for('administration.projects.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('administration.projects');
    $trail->push($variable->name, route('administration.projects.edit', $variable));
});

// Administering > Clients
Breadcrumbs::for('administration.clients', function (BreadcrumbTrail $trail) {
    $trail->parent('administration');
    $trail->push('Les clients', route('administration.clients.index'));
});

// Administering > Clients > Create
Breadcrumbs::for('administration.clients.create', function (BreadcrumbTrail $trail) {
    $trail->parent('administration.clients');
    $trail->push('Création', route('administration.clients.create'));
});

// Administering > Clients > [Project]
Breadcrumbs::for('administration.clients.edit', function (BreadcrumbTrail $trail, $variable) {
    $trail->parent('administration.clients');
    $trail->push($variable->name, route('administration.clients.edit', $variable));
});
