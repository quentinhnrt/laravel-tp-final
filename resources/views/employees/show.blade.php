@extends('base')

@php
    $isDeveloper = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE;
@endphp

@section('title', $employee->firstname . ' ' . $employee->lastname)
@section('description', $employee->firstname . ' ' . $employee->lastname)
@section('image', asset('logo.svg'))
@section('theme', $isDeveloper ? 'theme-green' : 'theme-red')

@section('breadcrumb')
    {{ Breadcrumbs::render($isDeveloper ? 'developers.show' : 'project-managers.show', $employee) }}
@endsection

@section('header')
    <x-organisms.header-front />
@endsection

@section('content')
    <x-organisms.container>
        <div class="flex flex-col-reverse justify-between gap-4 md:flex-row">
            <div class="mt-6 w-full text-background-700 md:mt-0 text-left">
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
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 my-8">
            @if($employee->isDeveloper())
                @forelse($employee->getTasksByProject() as $tasks)
                    <div>
                        <div class="py-2 bg-gray-600 text-white">
                            <p>{{ $tasks->first()->project->name }}</p>
                        </div>
                        <div class="bg-gray-300">
                            @foreach($tasks as $task)
                                <a href="{{ route('administration.tasks.show', $task) }}" class="p-2 border border-gray-400 block hover:bg-gray-400 duration-200">
                                    <div class="flex justify-between">
                                        <div>
                                            <p class="font-semibold">{{ $task->name }}</p>
                                        </div>
                                        <div>
                                            <p>{{ $task->getStatus()->label }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p class="text-background-500 dark:text-background-300">Aucun projet</p>
                @endforelse
            @else
                @forelse($employee->projects()->get() as $project)
                    <div>
                        <div class="py-2 bg-gray-600 text-white">
                            <p>{{ $project->name }}</p>
                        </div>
                        <div class="bg-gray-300">
                            @foreach($employee->getProjectsTasks($project->id) as $task)
                                <a href="{{ route('administration.tasks.show', $task) }}" class="p-2 border border-gray-400 block hover:bg-gray-400 duration-200">
                                    <div class="flex justify-between">
                                        <div>
                                            <p class="font-semibold">{{ $task->name }}</p>
                                        </div>
                                        <div>
                                            <p>{{ $task->getStatus()->label }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p class="text-background-500 dark:text-background-300">Aucun projet</p>
                @endforelse
            @endif
        </div>
    </x-organisms.container>
@endsection
