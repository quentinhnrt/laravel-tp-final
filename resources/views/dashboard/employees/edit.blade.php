@extends('base')

@php
    $isDeveloper = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE;
@endphp

@section('title', 'Modification d\'un ' . ($isDeveloper ? 'developpeur' : 'chef de projet'))
@section('description', 'Modification d\'un ' . ($isDeveloper ? 'developpeur' : 'chef de projet'))
@section('image', asset('logo.svg'))
@section('theme', $isDeveloper ? 'theme-green' : 'theme-red')

@section('breadcrumb')
    {{ Breadcrumbs::render($isDeveloper ? 'dashboard.developers.edit' : 'dashboard.project-managers.edit', $employee) }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Modification d'un
                {{ $isDeveloper ? 'développeur' : 'chef de projet' }}
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        @include('dashboard.employees.form', ['employee' => $employee])
    </x-organisms.container>
@endsection
