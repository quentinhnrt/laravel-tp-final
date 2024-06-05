@extends('base')

@php
    $isDeveloper = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE;
@endphp

@section('title', $employee->firstname . ' ' . $employee->lastname)
@section('description', $employee->firstname . ' ' . $employee->lastname)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render($isDeveloper ? 'developers.show' : 'project-managers.show', $employee) }}
@endsection

@section('content')
    <x-organisms.container>
        <div
            class="flex flex-col-reverse items-center justify-between gap-4 md:flex-row"
        >
            <div class="mt-6 w-full text-background-700 md:mt-0">
                <h1
                    class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $employee->firstname }} {{ $employee->lastname }}
                </h1>
                <p class="mt-6 text-background-500 dark:text-background-300">
                    Fonction: {{ $employee->function }}
                </p>
                <p class="mt-2 text-background-500 dark:text-background-300">
                    Création: {{ $employee->created_at->format('j F, Y') }}
                </p>
            </div>
            <img
                src="https://xsgames.co/randomusers/avatar.php?g=female"
                width="256"
                height="256"
                alt="photo de profil"
                class="xs:w-2/3 aspect-square h-auto w-full max-w-[300px] rounded-lg object-cover md:w-2/5"
            />
        </div>
    </x-organisms.container>
@endsection
