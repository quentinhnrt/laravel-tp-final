@extends('base')

@section('title', 'Les clients')
@section('description', 'Liste des clients')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('clients') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Listes des clients
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        <div
            class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            @if (! empty($clients))
                @foreach ($clients as $client)
                    <article
                        class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <div class="p-6">
                            <div>
                                <span
                                    class="text-xs font-medium uppercase text-theme-600 dark:text-theme-400"
                                >
                                    {{-- @if ($employee->role === "project_manager") --}}
                                    {{-- Chef de projet --}}
                                    {{-- @else --}}
                                    {{-- Developpeur --}}
                                    {{-- @endif --}}
                                </span>
                                <span
                                    class="mt-2 block transform text-xl font-semibold text-background-800 transition-colors duration-300 dark:text-white"
                                    tabindex="0"
                                    role="link"
                                >
                                    {{ $client->name }} {{ $client->address }}
                                </span>
                                <x-atoms.link
                                    type="link"
                                    target="_blank"
                                    href="{!! $client->website !!}"
                                    class="mt-4"
                                >
                                    {!! $client->website !!}
                                </x-atoms.link>
                                <p
                                    class="mt-6 text-sm text-background-600 dark:text-background-400"
                                >
                                    Chef de projet: {{ $project->author }}
                                </p>
                                <p
                                    class="mt-4 text-sm text-background-600 dark:text-background-400"
                                >
                                    {{ $project->projectlist }}
                                </p>
                                {{-- <p --}}
                                {{-- class="mt-2 text-sm text-background-600 dark:text-background-400" --}}
                                {{-- > --}}
                                {{-- </p> --}}
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        href="{{ route('administration.clients.show', ['client' => $client]) }}"
                                    >
                                        Voir les détails
                                    </x-atoms.link>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
        <div class="pagination"></div>
    </x-organisms.container>
@endsection
