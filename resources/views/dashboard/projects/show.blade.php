@extends('base')

@section('title', $project->name . ' ' . $project->client->description)
@section('description', $project->name . ' ' . $project->client->description)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.projects.show', $project) }}
@endsection

@section('content')
    <x-organisms.container>
        <div>
            <div class="mx-auto mb-4">
                <h1 class="text-left text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white">
                    {{ $project->name }}
                </h1>
            </div>
            <div>
                <div>
                    <p class="mt-2 text-left text-sm text-background-600 dark:text-background-400">
                        {{ $project->description }}
                    </p>
                    <p class="mt-2 text-left text-sm text-background-600 dark:text-background-400">
                        Client : {{ $project->client->name }}
                    </p>
                    @php
                        $viewUrl = route('administration.clients.show', $project->client);
                    @endphp

                    <x-atoms.link type="button" variant="outline" :href="$viewUrl">
                        Voir
                    </x-atoms.link>
                    <p class="mt-2 text-left text-sm text-background-600 dark:text-background-400">
                        Chef de projet : {{ $project->projectManager->firstname }} {{ $project->projectManager->lastname }}
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($project->tasks as $task)
                    <div class="m-2 rounded-lg bg-white p-4 shadow-md dark:bg-background-800">
                        <h2 class="text-lg font-semibold text-background-800 dark:text-white">
                            {{ $task->name }}
                        </h2>
                        <p class="mt-2 text-sm text-background-600 dark:text-background-400">
                            {{ $task->description }}
                        </p>
                        <p class="mt-2 text-sm text-background-600 dark:text-background-400">
                            {{ $task->getStatus()?->label }}
                        </p>
                        <p class="mt-2 text-sm text-background-600 dark:text-background-400">
                            {{ $task->getNature()?->label }}
                        </p>
                        <div class="mt-2">
                            <a href="{{ route('administration.tasks.show', $task) }}" class="text-sm text-blue-500 hover:text-blue-700">
                                Voir la tâche
                            </a>
                            <a href="{{ route('administration.tasks.edit', $task) }}" class="ml-4 text-sm text-blue-500 hover:text-blue-700">
                                Modifier la tâche
                            </a>
                            <form action="{{ route('administration.tasks.destroy', $task) }}" method="POST" class="inline-block ml-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-500 hover:text-red-700">
                                    Supprimer la tâche
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-organisms.container>
@endsection