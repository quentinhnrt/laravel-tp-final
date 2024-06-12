@extends('base')

@section('title', $client->name . ' ' . $client->address)
@section('description', $client->name . ' ' . $client->address)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.clients.show', $client) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                {{ $client->name }}
            </h1>
        </div>
        <p
            class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
        >
            Website :
            <span class="truncate text-theme-500 hover:text-theme-700">
                {!! $client->website !!}
            </span>
        </p>
        <p
            class="mt-1 text-left text-background-600 md:mt-0 xl:text-lg dark:text-background-400"
        >
            {{ $client->address }}
        </p>
        <div
            class="mt-4 flex items-center gap-4 text-background-600 md:mt-6 dark:text-background-400"
        >
            <x-atoms.link
                type="button"
                variant="outline"
                :href="route('dashboard.clients.edit', ['client' => $client])"
            >
                Modifier le client
            </x-atoms.link>
            <form
                action="{{ route('dashboard.clients.destroy', ['client' => $client]) }}"
                method="POST"
                style="display: inline"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');"
            >
                @csrf
                @method('DELETE')
                <x-atoms.btn type="submit" color="red" class="theme-red">
                    Supprimer le client
                </x-atoms.btn>
            </form>
        </div>

        <h2 class="mb-4 mt-8 text-3xl text-white md:mt-12">Projets</h2>
        <div
            class="grid grid-cols-1 gap-4 overflow-hidden md:grid-cols-2 lg:grid-cols-3 xl:mt-8 xl:grid-cols-4"
        >
            @forelse ($client->projects as $project)
                <a
                    href="{{ route('dashboard.projects.show', $project) }}"
                    class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                >
                    <div class="relative flex h-full flex-col p-6">
                        <h3
                            class="text-lg font-semibold text-background-800 md:text-xl dark:text-white"
                        >
                            {{ $project->name }}
                        </h3>
                        <p
                            class="mt-4 text-sm text-background-600 dark:text-background-400"
                        >
                            {{ $project->description }}
                        </p>
                    </div>
                </a>
            @empty
                <p>Aucun projets</p>
            @endforelse
        </div>
    </x-organisms.container>
@endsection
