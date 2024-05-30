<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>404 - Not found</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet"
        />
        @vite('resources/css/app.css')
        @bukStyles
    </head>
    <body class="bg-white font-spacemono" data-barba="wrapper">
        <div
            class="grid h-screen place-content-center bg-white px-4"
            data-barba="container"
            data-barba-namespace="with-cover"
        >
            <div
                class="lav-transition fixed left-0 top-0 z-10 h-screen w-screen translate-y-full bg-lav-blue-500"
            ></div>
            <div class="text-center">
                <div class="text-center">
                    <h1 class="text-9xl font-black text-gray-200">404</h1>
                    <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uh-oh!</p>
                    <p class="mt-4 text-gray-500">Nous avons perdu la page quelque part.</p>
                    <x-link href="{{ url()->previous() }}" class="mt-6">Revenir sur la page précédente</x-link>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
        @bukScripts
    </body>
</html>
