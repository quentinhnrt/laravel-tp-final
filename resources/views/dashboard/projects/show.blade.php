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
                <h1
                    class="text-left text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $project->name }}
                </h1>
            </div>
            <div>
                <div>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        {{ $project->description }}
                    </p>
                    @php
                        $viewUrl = route('administration.clients.show', $project->client);
                    @endphp

                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        Client :
                        <a
                            href="{{ $viewUrl }}"
                            class="text-blue-500 hover:text-blue-700"
                        >
                            {{ $project->client->name }}
                        </a>
                    </p>
                    @php
                        $viewUrl = route('administration.project-managers.show', $project->projectManager);
                    @endphp

                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        Chef de projet :
                        <a
                            href="{{ $viewUrl }}"
                            class="text-blue-500 hover:text-blue-700"
                        >
                            {{ $project->projectManager->firstname }}
                            {{ $project->projectManager->lastname }}
                        </a>
                    </p>
                </div>
            </div>
            <div
                class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:mt-8 xl:grid-cols-4"
            >
                @foreach ($project->tasks as $task)
                    <div
                        class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <div class="p-6">
                            <h2
                                class="text-lg font-semibold text-background-800 dark:text-white"
                            >
                                {{ $task->name }}
                            </h2>
                            <p
                                class="mt-2 text-sm text-background-600 dark:text-background-400"
                            >
                                {{ $task->description }}
                            </p>
                            <p
                                class="mt-2 text-sm text-background-600 dark:text-background-400"
                            >
                                {{ $task->getStatus()?->label }}
                            </p>
                            <p
                                class="mt-2 text-sm text-background-600 dark:text-background-400"
                            >
                                {{ $task->getNature()?->label }}
                            </p>
                            <div class="mt-4 flex w-full flex-col gap-2">
                                <div
                                    class="flex flex-1 flex-col flex-wrap justify-end gap-2 lg:flex-row"
                                >
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        href="{{ route('administration.tasks.show', $task) }}"
                                        class="!h-auto flex-1 text-sm"
                                    >
                                        Voir la tâche
                                    </x-atoms.link>
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        href="{{ route('administration.tasks.edit', $task) }}"
                                        class="!h-auto flex-1 text-sm"
                                    >
                                        Modifier la tâche
                                    </x-atoms.link>
                                </div>

                                <form
                                    action="{{ route('administration.tasks.destroy', $task) }}"
                                    method="POST"
                                    class="flex"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <x-atoms.btn
                                        type="submit"
                                        class="theme-red !h-auto flex-1 text-sm"
                                    >
                                        Supprimer la tâche
                                    </x-atoms.btn>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-organisms.container>
@endsection
