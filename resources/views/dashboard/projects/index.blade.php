@extends('base')

@section('title', 'Listes des projets')
@section('description', 'Listes des projets')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.projects') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Liste des Projets
            </h1>
        </div>
        <div
            class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            @if (! empty($projects))
                @foreach ($projects as $project)
                    <article
                        class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <img
                            class="h-32 w-full rounded-t-lg object-cover"
                            src="https://picsum.photos/id/{{ $project->id }}/725/150"
                            alt="Article"
                            loading="lazy"
                        />

                        <div class="p-6">
                            <div>
                                <span
                                    class="mt-0 block transform text-xl font-semibold text-background-800 transition-colors duration-300 dark:text-white"
                                    tabindex="0"
                                    role="link"
                                >
                                    {{ $project->name }}
                                </span>
                                <p
                                    class="mt-2 text-sm text-background-600 dark:text-background-400"
                                >
                                    Description : {{ $project->description }}
                                </p>
                                @php
                                    $viewUrl = route('dashboard.clients.show', $project->client);
                                @endphp

                                <p
                                    class="mt-4 text-sm text-background-600 dark:text-background-400"
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
                                    class="mt-1 text-sm text-background-600 dark:text-background-400"
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
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        :href="route('dashboard.projects.show', ['project' => $project])"
                                    >
                                        Voir les détails
                                    </x-atoms.link>
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        :href="route('dashboard.projects.edit', ['project' => $project])"
                                    >
                                        Éditer
                                    </x-atoms.link>
                                    <form
                                        action="{{ route('dashboard.projects.destroy', ['project' => $project]) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <x-atoms.btn
                                            type="submit"
                                            color="red"
                                            class="theme-red"
                                        >
                                            Supprimer
                                        </x-atoms.btn>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            @else
                <p class="mt-6 text-background-500 dark:text-background-300">
                    Aucun projet trouvé.
                </p>
            @endif
        </div>
        <div class="pagination mt-8">
            {{ $projects->links() }}
        </div>
    </x-organisms.container>
@endsection
