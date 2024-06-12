@extends('base')

@section('title', 'Modification d\'une tâche')
@section('description', 'Modification d\'une tâche')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.tasks.edit', $task) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Modifier la tâche
            </h1>
        </div>
        @include('dashboard.tasks.form')
    </x-organisms.container>
@endsection
