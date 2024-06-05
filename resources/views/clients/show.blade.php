@extends('base')

@section('title', $client->name . ' ' . $client->address)
@section('description', $client->name . ' ' . $client->address)
@section('image', asset('logo.svg'))
@section('theme', 'theme-blue')

@section('breadcrumb')
    {{ Breadcrumbs::render('clients.show', $client) }}
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
                    {{ $client->name }}
                </h1>
                <x-atoms.link
                    type="link"
                    target="_blank"
                    href="{!! $client->website !!}"
                    class="mt-4"
                >
                    {!! $client->website !!}
                </x-atoms.link>
                <p class="mt-6 text-background-500 dark:text-background-300">
                    {{ $client->address }}
                </p>
                <p class="mt-2 text-background-500 dark:text-background-300">
                    {!! $client->contentclient !!}
                </p>
                <p class="mt-4 text-background-500 dark:text-background-300">
                    {!! $client->projectlist !!}
                </p>
                <div
                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                >
                    @php
                        $viewUrl = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE ? route('developers.show', $employee) : route('project-managers.show', $employee);
                        $editUrl = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE ? route('administration.developers.edit', $employee) : route('administration.project-managers.edit', $employee);
                        $actionForm = request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE ? route('administration.developers.destroy', $employee) : route('administration.project-managers.destroy', $employee);
                    @endphp

                    <x-atoms.link
                        type="button"
                        variant="outline"
                        href="{{ route('administration.clients.edit', ['client' => $client]) }}"
                    >
                        Modifier le client
                    </x-atoms.link>
                    <form
                        action="{{ route('administration.clients.destroy', ['client' => $client]) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <x-atoms.btn
                            type="submit"
                            color="red"
                            class="theme-red"
                        >
                            Supprimer
                        </x-atoms.btn>
                    </form>
                </div>
            </div>
        </div>
    </x-organisms.container>
@endsection
