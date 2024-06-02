@extends("base")

@section("breadcrumb")
    {{ Breadcrumbs::render("home") }}
@endsection

@section("content")
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-background-800 text-3xl font-semibold lg:text-4xl dark:text-white"
            >
                Building Your Next App with our Awesome components
            </h1>
            <p class="text-background-500 dark:text-background-300 mt-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero
                similique obcaecati illum mollitia.
            </p>
            <x-atoms.btn class="mx-auto mt-6">Test</x-atoms.btn>
        </div>

        <div
            class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            <a
                href="#"
                class="theme-blue dark:border-background-700 group flex transform cursor-pointer flex-col items-center rounded-xl border p-8 transition-colors duration-300 hover:border-theme-600"
            >
                <div
                    class="bg-background-700 flex h-32 w-32 items-center justify-center rounded-full p-6 group-hover:bg-theme-600"
                >
                    <x-atoms.logo
                        class="h-full w-full fill-white"
                    ></x-atoms.logo>
                </div>
                <h2
                    class="text-background-700 mt-4 text-2xl font-semibold capitalize dark:text-white"
                >
                    Nos projets
                </h2>

                <p
                    class="text-background-500 dark:text-background-300 mt-2 capitalize"
                >
                    Voir plus ...
                </p>
            </a>
            <a
                href="#"
                class="theme-red dark:border-background-700 group flex transform cursor-pointer flex-col items-center rounded-xl border p-8 transition-colors duration-300 hover:border-theme-600"
            >
                <div
                    class="bg-background-700 flex h-32 w-32 items-center justify-center rounded-full p-6 group-hover:bg-theme-600"
                >
                    <x-atoms.logo
                        class="h-full w-full fill-white"
                    ></x-atoms.logo>
                </div>
                <h2
                    class="text-background-700 mt-4 text-2xl font-semibold capitalize dark:text-white"
                >
                    Nos projets
                </h2>

                <p
                    class="text-background-500 dark:text-background-300 mt-2 capitalize"
                >
                    Voir plus ...
                </p>
            </a>
        </div>
    </x-organisms.container>
@endsection
