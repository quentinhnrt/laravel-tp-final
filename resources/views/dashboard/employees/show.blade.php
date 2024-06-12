@extends('base')

@php
    $isDeveloper = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE;
@endphp

@section('title', $employee->firstname . ' ' . $employee->lastname)
@section('description', $employee->firstname . ' ' . $employee->lastname)
@section('image', asset('logo.svg'))
@section('theme', $isDeveloper ? 'theme-green' : 'theme-red')

@section('breadcrumb')
    @if ($employee->isDeveloper())
        {{ Breadcrumbs::render('dashboard.developers.show', $employee) }}
    @else
        {{ Breadcrumbs::render('dashboard.project-managers.show', $employee) }}
    @endif
@endsection

@section('content')
    <x-organisms.container>
        <div class="flex flex-col-reverse justify-between gap-4 md:flex-row">
            <div class="mt-6 w-full text-left text-background-700 md:mt-0">
                <h1
                    class="text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $employee->firstname }} {{ $employee->lastname }}
                </h1>
                <p
                    class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
                >
                    Fonction:
                    <span
                        class="text-md w-fit rounded bg-theme-100 px-2.5 py-0.5 font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300"
                    >
                        {{ $employee->function }}
                    </span>
                </p>
                <p
                    class="mt-1 text-left text-background-600 md:mt-0 xl:text-lg dark:text-background-400"
                >
                    Création du profil:
                    {{ $employee->created_at->format('j F, Y') }}
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
        <div
            class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:mt-8 xl:grid-cols-3"
        >
            @if ($employee->isDeveloper() || $employee->isProjectManager())
                @forelse ($employee->getTasksByProject() as $tasks)
                    <div
                        class="w-full overflow-hidden rounded-lg border bg-white text-left shadow-md hover:border-theme-600 dark:border-background-700 dark:bg-background-800"
                    >
                        <div class="bg-theme-600 px-3 py-2 text-white">
                            <p>{{ $tasks->first()->project->name }}</p>
                        </div>
                        <div>
                            @foreach ($tasks as $task)
                                <a
                                    href="{{ route('dashboard.tasks.show', $task) }}"
                                    @class([
                                        'block border-background-400 px-3 py-2 text-background-500 duration-200 hover:bg-theme-200 hover:text-background-700 dark:text-background-300',
                                        'border-b' => ! $loop->last,
                                    ])
                                >
                                    <div
                                        class="flex flex-wrap items-center justify-between gap-x-2"
                                    >
                                        <div class="flex-1">
                                            <p class="font-semibold">
                                                {{ $task->name }}
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <span
                                                @class([
                                                    'w-fit rounded bg-theme-100 px-2.5 py-0.5 text-xs font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300',
                                                    'theme-purple' => $task->getStatus()?->id === 1,
                                                    'theme-green' => $task->getStatus()?->id === 5,
                                                    'theme-red' => $task->getStatus()?->id === 3,
                                                    'theme-yellow' => $task->getStatus()?->id === 4,
                                                    'theme-blue' => $task->getStatus()?->id === 2,
                                                    'theme-brown' => $task->getStatus()?->id === 6,
                                                    'theme-pink' => $task->getStatus()?->id === 7,
                                                ])
                                            >
                                                {{ $task->getStatus()?->label }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p class="text-background-500 dark:text-background-300">
                        Aucun projet
                    </p>
                @endforelse
            @else
                @forelse ($employee->projects()->get() as $project)
                    <a
                        href="{{ route('dashboard.project-managers.show', $employee) }}"
                        class="bg-background-600 py-2 text-background-500 dark:text-background-300"
                    >
                        <p>{{ $project->name }}</p>
                    </a>
                @empty
                    <p class="text-background-500 dark:text-background-300">
                        Aucun projet
                    </p>
                @endforelse
            @endif
        </div>
    </x-organisms.container>
@endsection
