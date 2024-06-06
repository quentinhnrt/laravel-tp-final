@extends("base")

@section("title", $project->name . " " . $project->client->description)

@section("content")
    <x-organisms.container>
        <div>
            <div class="mx-auto mb-4">
                <h1
                    class="text-left text-3xl font-semibold text-background-800 lg:text-4xl dark:text-white"
                >
                    {{ $project->name }}
                </h1>
            </div>
            <div>
                <div>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        {{ $project->description }}
                    </p>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        Client : {{ $project->client->name }}
                    </p>
                    <p
                        class="mt-2 text-left text-sm text-background-600 dark:text-background-400"
                    >
                        Chef de projet :
                        {{ $project->projectManager->firstname }}
                        {{ $project->projectManager->lastname }}
                    </p>
                </div>
            </div>
        </div>
    </x-organisms.container>
@endsection
