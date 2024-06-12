@extends('base')

@section('title', '404')
@section('description', 'Erreur 404')
@section('image', asset('logo.svg'))
@section('theme', 'theme-purple')

@section('breadcrumb')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('header')
    <x-organisms.header-front />
@endsection

@section('content')
    <section
        class="section flex bg-white md:items-center dark:bg-background-900"
    >
        <div
            class="container mx-auto h-fit px-6 pb-12 pt-4 lg:flex lg:items-center lg:gap-12"
        >
            <div class="w-full lg:w-1/2">
                <p
                    class="text-sm font-medium text-theme-500 dark:text-theme-400"
                >
                    Erreur 404
                </p>
                <h1
                    class="mt-3 text-2xl font-semibold text-background-800 md:text-3xl dark:text-white"
                >
                    Nos avons perdu la page !
                </h1>
                <p class="mt-4 text-background-500 dark:text-background-400">
                    Désolé, la page que vous recherchez n'existe pas
                </p>

                <div class="mt-6 flex items-center gap-x-3">
                    <x-atoms.link
                        href="{{ url()->previous() }}"
                        type="button"
                        variant="outline"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-5 w-5 rtl:rotate-180"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                            />
                        </svg>

                        <span>Revenir en arrière</span>
                    </x-atoms.link>
                    <x-atoms.link href="{{ route('home') }}" type="button">
                        Retour à l'accueil
                    </x-atoms.link>
                </div>

                <div class="mt-10 space-y-6">
                    <div>
                        <a
                            href="{{ route('administration.projects.index') }}"
                            class="inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline dark:text-theme-400"
                        >
                            <span>Les projets</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="mt-2 text-sm text-background-500 dark:text-background-400"
                        >
                            Plongez pour tout savoir sur les projets.
                        </p>
                    </div>

                    <div>
                        <a
                            href="{{ route('developers.index') }}"
                            class="inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline dark:text-theme-400"
                        >
                            <span>Les développeurs</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="mt-2 text-sm text-background-500 dark:text-background-400"
                        >
                            Voir l'ensemble des développeurs.
                        </p>
                    </div>

                    <div>
                        <a
                            href="{{ route('project-managers.index') }}"
                            class="inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline dark:text-theme-400"
                        >
                            <span>Les chefs de projets</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="mt-2 text-sm text-background-500 dark:text-background-400"
                        >
                            Voir l'ensemble des chefs de projets.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative mt-8 w-full lg:mt-0 lg:w-1/2">
                <img
                    class="h-80 w-full rounded-lg object-cover md:h-96 lg:h-[32rem]"
                    src="https://images.unsplash.com/photo-1508881598441-324f3974994b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                    alt=""
                />
            </div>
        </div>
    </section>
@endsection
