@extends('base')

@section('title', $project->name . ' ' . $project->client->description)
@section('description', $project->name . ' ' . $project->client->description)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.projects.show', $project) }}
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
                    @php
                        $viewUrl = route('dashboard.clients.show', $project->client);
                    @endphp

                    <p
                        class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
                    >
                        Client :
                        <a
                            href="{{ $viewUrl }}"
                            class="text-theme-500 hover:text-theme-700"
                        >
                            {{ $project->client->name }}
                        </a>
                    </p>
                    @php
                        $viewUrl = route('dashboard.project-managers.show', $project->projectManager);
                    @endphp

                    <p
                        class="mt-1 text-left text-background-600 md:mt-0 xl:text-lg dark:text-background-400"
                    >
                        Chef de projet :
                        <a
                            href="{{ $viewUrl }}"
                            class="text-theme-500 hover:text-theme-700"
                        >
                            {{ $project->projectManager->firstname }}
                            {{ $project->projectManager->lastname }}
                        </a>
                    </p>
                    <p
                        class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
                    >
                        {{ $project->description }}
                    </p>
                </div>
            </div>
            <div
                class="mt-4 grid grid-cols-1 gap-4 overflow-hidden md:grid-cols-2 lg:grid-cols-3 xl:mt-8 xl:grid-cols-4"
            >
                @foreach ($project->tasks as $task)
                    <div
                        class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <div class="relative flex h-full flex-col p-6">
                            <div class="mb-4 flex justify-between">
                                <p
                                    @class([
                                        'w-fit rounded bg-theme-100 px-2.5 py-0.5 text-xs font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300',
                                        'theme-blue' => $task->getNature()?->label === 'Front',
                                        'theme-red' => $task->getNature()?->label === 'Back',
                                    ])
                                >
                                    {{ $task->getNature()?->label }}
                                </p>
                            </div>
                            <h2
                                class="text-lg font-semibold text-background-800 md:text-xl dark:text-white"
                            >
                                {{ $task->name }}
                            </h2>
                            <p
                                class="mt-4 text-sm text-background-600 dark:text-background-400"
                            >
                                {{ $task->description }}
                            </p>
                            <p
                                class="mt-4 text-sm text-background-600 dark:text-background-400"
                            >
                                Statut :
                                <span
                                    @class([
                                        'w-fit rounded bg-theme-100 px-2.5 py-0.5 text-xs font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300',
                                        'theme-purple' => $task->getStatus()?->id === 1,
                                        'theme-green' => $task->getStatus()?->id === 5,
                                        'theme-red' => $task->getStatus()?->id === 3,
                                        'theme-yellow' => $task->getStatus()?->id === 4,
                                        'theme-blue' => $task->getStatus()?->id === 2,
                                        'theme-brown' => $task->getStatus()?->id === 6,
                                        'theme-pink' => $task->getStatus()?->id === 7,
                                    ])
                                >
                                    {{ $task->getStatus()?->label }}
                                </span>
                            </p>
                            <div class="flex h-full flex-col justify-end">
                                <div class="mt-6 flex w-full flex-col gap-2">
                                    <div
                                        class="flex flex-1 flex-col flex-wrap justify-end gap-2 lg:flex-row"
                                    >
                                        <x-atoms.link
                                            type="button"
                                            variant="outline"
                                            href="{{ route('dashboard.tasks.show', $task) }}"
                                            class="!h-auto flex-1 text-sm"
                                        >
                                            Voir la tâche
                                        </x-atoms.link>
                                        <x-atoms.link
                                            type="button"
                                            variant="outline"
                                            href="{{ route('dashboard.tasks.edit', $task) }}"
                                            class="!h-auto flex-1 text-sm"
                                        >
                                            Modifier la tâche
                                        </x-atoms.link>
                                    </div>

                                    <form
                                        action="{{ route('dashboard.tasks.destroy', $task) }}"
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
                    </div>
                @endforeach
            </div>
        </div>
    </x-organisms.container>
@endsection
