@extends('base')

@section('title', $client->name . ' ' . $client->address)
@section('description', $client->name . ' ' . $client->address)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.clients.show', $client) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-background-800 text-3xl font-semibold lg:text-4xl dark:text-white"
            >
                {{ $client->name }}
            </h1>
        </div>

        <h2 class="text-background-600 dark:text-background-400 mt-2 text-sm"> {{ $client->address }}</h2>

        <p class="text-background-600 dark:text-background-400 mt-2 text-sm">
            {!! $client->website !!}
        </p>
        <p class="text-background-600 dark:text-background-400 mt-2 text-sm">
            <x-atoms.link
                type="button"
                variant="outline"
                :href="route('administration.clients.edit', ['client' => $client])">

                Modifier le client
            </x-atoms.link>
        <form action="{{ route('administration.clients.destroy', ['client' => $client]) }}" method="POST"
              style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
            @csrf
            @method('DELETE')
            <x-atoms.btn
                type="submit"
                color="red"
                class="theme-red"
            >
                Supprimer le client
            </x-atoms.btn>
        </form>
        </p>
    </x-organisms.container>
@endsection
