@extends("base")

@section("title", $task->name . " " . $task->project->name . " " . $task->project->client->description)

@section("content")
    <x-organisms.container>
        <div>
            <div class="mx-auto mb-4">
                <h1
                    class="text-left text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $task->name }} -
                    <a
                        class="text-red-500 underline"
                        href="{{ route("administration.projects.show", $task->project) }}"
                    >
                        {{ $task->project->name }}
                    </a>
                </h1>
            </div>
            <div>
                <div>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        {{ $task->description }}
                    </p>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        {{ $task->getStatus()?->label }}
                    </p>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        {{ $task->getNature()?->label }}
                    </p>
                </div>
            </div>
            <p class="mb-4 mt-8 text-left text-white">
                Developpeurs : {{ $task->getDevelopersList() }}
            </p>
            <p class="text-left text-white">
                Chefs de projets : {{ $task->getManagersList() }}
            </p>
        </div>
    </x-organisms.container>
@endsection
