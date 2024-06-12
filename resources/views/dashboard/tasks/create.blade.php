@extends('base')

@section('title', 'Création d\'une tâche')
@section('description', 'Création d\'une tâche')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.tasks.create') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Créer une tâche
            </h1>
        </div>
        @include('dashboard.tasks.form')
    </x-organisms.container>
@endsection
