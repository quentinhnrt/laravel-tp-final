@extends('base')

@php
    $isDeveloper = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE;
@endphp

@section('title', 'Liste des ' . ($isDeveloper ? 'developpeurs' : 'chefs de projet'))
@section('description', 'Liste des ' . ($isDeveloper ? 'developpeurs' : 'chefs de projet'))
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render($isDeveloper ? 'developers' : 'project-managers') }}
@endsection

@section('content')
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
            >
                Listes des
                {{ $isDeveloper ? 'développeurs' : 'chefs de projet' }}
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        <div
            class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            @if (! empty($employees))
                @foreach ($employees as $employee)
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
                                    {{ $employee->firstname }}
                                    {{ $employee->lastname }}
                                </span>
                                <p
                                    class="mt-2 text-sm text-background-600 dark:text-background-400"
                                >
                                    Fonction : {{ $employee->function }}
                                </p>
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    @php
                                        $viewUrl = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE ? route('developers.show', $employee) : route('project-managers.show', $employee);
                                    @endphp

                                    <x-atoms.link
                                        type="button"
                                        :href="$viewUrl"
                                    >
                                        Voir
                                    </x-atoms.link>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </x-organisms.container>
@endsection
