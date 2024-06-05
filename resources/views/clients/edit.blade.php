@extends('base')

@section('title', 'Modification d\'un client')
@section('description', 'Modification d\'un client')
@section('image', asset('logo.svg'))
@section('theme', 'theme-red')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.clients.edit', $clients) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Modification d'un client
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        @include('clients.form')
    </x-organisms.container>
@endsection
