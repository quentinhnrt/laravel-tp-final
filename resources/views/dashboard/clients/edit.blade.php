@extends('base')

@section('title', 'Création d\'un client')
@section('description', 'Création d\'un client')
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('administration.clients.edit', $client) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Modifier le client
            </h1>
        </div>
        @include('dashboard.clients.form')
    </x-organisms.container>
@endsection
