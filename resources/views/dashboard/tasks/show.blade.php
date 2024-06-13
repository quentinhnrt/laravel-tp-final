@extends('base')

@section('title', $task->name . ' ' . $task->project->name . ' ' . $task->project->client->description)
@section('description', $task->name . ' ' . $task->project->name . ' ' . $task->project->client->description)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.tasks.show', $task) }}
@endsection

@section('content')
    <x-organisms.container>
        <div>
            <div class="mx-auto mb-4">
                <h1
                    class="text-left text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $task->name }} -
                    <a
                        class="text-theme-500"
                        href="{{ route('dashboard.projects.show', $task->project) }}"
                    >
                        {{ $task->project->name }}
                    </a>
                </h1>
            </div>
            <div>
                <div>
                    <p
                        class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
                    >
                        Statut :
                        <span
                            @class([
                                'xl:text-md w-fit rounded bg-theme-100 px-2.5 py-0.5 text-xs font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300',
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
                    </p>

                    <p
                        class="mt-1 text-left text-background-600 md:mt-0 xl:text-lg dark:text-background-400"
                    >
                        Catégorie :
                        @foreach ($task->getNature() as $nature)
                            <span
                                @class([
                                    'xl:text-md mr-2 w-fit rounded bg-theme-100 px-2.5 py-0.5 text-xs font-medium text-theme-800 dark:bg-theme-900 dark:text-theme-300',
                                    'theme-blue' => $nature->label === 'Front',
                                    'theme-red' => $nature->label === 'Back',
                                ])
                            >
                                {{ $nature->label }}
                            </span>
                        @endforeach
                    </p>
                    <p
                        class="mt-4 text-left text-background-600 xl:text-lg dark:text-background-400"
                    >
                        {{ $task->description }}
                    </p>
                </div>
            </div>
            <p
                class="mt-8 text-left text-background-600 xl:text-lg dark:text-background-400"
            >
                Développeurs :
                <span
                    class="theme-green text-background-800 dark:text-background-200"
                >
                    {!! $task->getDevelopersList() !!}
                </span>
            </p>
            <p
                class="mt-1 text-left text-background-600 xl:text-lg dark:text-background-400"
            >
                Chefs de projets :
                <span
                    class="theme-red text-background-800 dark:text-background-200"
                >
                    {!! $task->getManagersList() !!}
                </span>
            </p>
        </div>
    </x-organisms.container>
@endsection
