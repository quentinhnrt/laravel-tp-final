@extends("base")

@section("title", "Accueil des Clients")

@section("content")
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
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
                                    class="mt-2 block transform text-xl font-semibold text-background-800 transition-colors duration-300 dark:text-white"
                                    tabindex="0"
                                    role="link"
                                >
                                    {{ $client->name }}
                                </span>
                                <p
                                    class="mt-2 text-sm text-background-600 dark:text-background-400"
                                >
                                    {{ $client->address }}
                                </p>
                                <a
                                    href="{{ $client->website }}"
                                    class="mt-2 text-sm text-background-600 dark:text-background-400"
                                >
                                    Website : {{ $client->website }}
                                </a>
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    @php
                                        $viewUrl = route("administration.clients.show", $client);
                                        $editUrl = route("administration.clients.edit", $client);
                                        $actionForm = route("administration.clients.destroy", $client);
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
                                        @method("DELETE")
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
    </x-organisms.container>
@endsection
