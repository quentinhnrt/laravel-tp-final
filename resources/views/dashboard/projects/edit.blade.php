@extends('base')

@section('title', 'Modification d\'un projet')
@section('description', 'Modification d\'un projet')
@section('image', asset('logo.svg'))
@section('theme', 'theme-red')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.projects.edit', $project) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Modification d'un projet
            </h1>
        </div>
        @include('dashboard.projects.form', ['projects' => $project])
    </x-organisms.container>
@endsection
