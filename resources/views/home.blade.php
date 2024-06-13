@extends('base')

@section('title', 'Accueil')
@section('description', 'Page d\'accueil de l\'application Dash')
@section('image', asset('logo.svg'))
@section('theme', 'theme-purple')

@section('breadcrumb')

@endsection

@section('header')
    <x-organisms.header-front />
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg text-center">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Une plateforme professionnelle pour manager vos projets.
            </h1>
            <p class="mt-6 text-background-500 dark:text-background-300">
                Organiser, manager tout en gardant le sourire. Rejoignez
                <strong>Dash</strong>
                et grandissez avec nous. Nous sommes là pour vous aider.
            </p>
            <x-atoms.link
                class="mx-auto mt-6"
                href="{{ route('dashboard.index') }}"
            >
                Commencer
            </x-atoms.link>
        </div>

        <div
            class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-16 xl:grid-cols-3"
        >
            <a
                href="{{ route('dashboard.index') }}"
                class="theme-blue group flex transform cursor-pointer flex-col items-center rounded-xl border p-8 transition-colors duration-300 hover:border-theme-600 dark:border-background-700"
            >
                <div
                    class="flex h-32 w-32 items-center justify-center rounded-full bg-background-700 p-6 group-hover:bg-theme-600"
                >
                    <x-atoms.logo
                        class="h-full w-full fill-white"
                    ></x-atoms.logo>
                </div>
                <h2
                    class="mt-4 text-2xl font-semibold text-background-700 dark:text-white"
                >
                    Dashboard
                </h2>
            </a>
            <a
                href="{{ route('project-managers.index') }}"
                class="theme-red group flex transform cursor-pointer flex-col items-center rounded-xl border p-8 transition-colors duration-300 hover:border-theme-600 dark:border-background-700"
            >
                <div
                    class="flex h-32 w-32 items-center justify-center rounded-full bg-background-700 p-6 group-hover:bg-theme-600"
                >
                    <x-atoms.logo
                        class="h-full w-full fill-white"
                    ></x-atoms.logo>
                </div>
                <h2
                    class="mt-4 text-2xl font-semibold text-background-700 dark:text-white"
                >
                    Chefs de projet
                </h2>
            </a>
            <a
                href="{{ route('developers.index') }}"
                class="theme-green group flex transform cursor-pointer flex-col items-center rounded-xl border p-8 transition-colors duration-300 hover:border-theme-600 dark:border-background-700"
            >
                <div
                    class="flex h-32 w-32 items-center justify-center rounded-full bg-background-700 p-6 group-hover:bg-theme-600"
                >
                    <x-atoms.logo
                        class="h-full w-full fill-white"
                    ></x-atoms.logo>
                </div>
                <h2
                    class="mt-4 text-2xl font-semibold text-background-700 dark:text-white"
                >
                    Développeurs
                </h2>
            </a>
        </div>
    </x-organisms.container>
@endsection
