@extends('base')

@section('title', $project->name . ' ' . $client->description)
@section('description', $project->name . ' ' . $client->description)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('projects.show', $project) }}
@endsection

@section('content')
    <x-organisms.container>
        <div
            class="flex flex-col-reverse items-center justify-between gap-4 md:flex-row"
        >
            <div class="mt-6 w-full text-background-700 md:mt-0">
                <h1
                    class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $project->name }}
                </h1>
                <p class="mt-6 text-theme-500 dark:text-theme-300">
                    {!! $project->client !!}
                </p>
                <p class="mt-2 text-background-500 dark:text-background-300">
                    {!! $project->project_manager_id !!}
                </p>
                <p class="mt-4 text-background-500 dark:text-background-300">
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </x-organisms.container>
@endsection
