@extends('base')

@section('title', 'Les clients')
@section('description', 'Liste des clients')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.clients') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Listes des clients
            </h1>
        </div>
        <ul
            class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            @if (! empty($clients))
                @foreach ($clients as $client)
                    <li
                        class="w-full rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <div class="p-6">
                            <div>
                                <span
                                    class="mt-0 block transform text-xl font-semibold text-background-800 transition-colors duration-300 dark:text-white"
                                    tabindex="0"
                                    role="link"
                                >
                                    {{ $client->name }}
                                </span>
                                <a
                                    href="{{ $client->website }}"
                                    class="mt-2 inline-block text-sm text-background-600 dark:text-background-400"
                                >
                                    Website :
                                    <span
                                        class="truncate text-theme-500 hover:text-theme-700"
                                    >
                                        {{ $client->website }}
                                    </span>
                                </a>
                                <p
                                    class="mt-1 text-sm text-background-600 dark:text-background-400"
                                >
                                    {{ $client->address }}
                                </p>
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    @php
                                        $viewUrl = route('dashboard.clients.show', $client);
                                        $editUrl = route('dashboard.clients.edit', $client);
                                        $actionForm = route('dashboard.clients.destroy', $client);
                                    @endphp

                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        :href="$viewUrl"
                                    >
                                        Voir
                                    </x-atoms.link>
                                    <x-atoms.link
                                        type="button"
                                        variant="outline"
                                        :href="$editUrl"
                                    >
                                        Editer
                                    </x-atoms.link>
                                    <form
                                        action="{{ $actionForm }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            type="hidden"
                                            name="id"
                                            value="{{ $client->id }}"
                                        />
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
                    </li>
                @endforeach
            @endif
        </ul>
        <div class="pagination mt-8">
            {{ $clients->links() }}
        </div>
    </x-organisms.container>
@endsection
