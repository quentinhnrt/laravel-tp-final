@extends('base')

@section('title', 'Création d\'un projet')
@section('description', 'Création d\'un projet')
@section('image', asset('logo.svg'))
@section('theme', 'theme-red')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.projects.create') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Ajout d'un projet
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        @include('projects.form')
    </x-organisms.container>
@endsection
