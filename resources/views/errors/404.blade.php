<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        {{-- Title --}}
        <title>404 - Not found</title>
        <link rel="icon" href="{{ asset("favicon.ico") }}" />
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet"
        />
        {{-- Styles --}}
        @vite("resources/css/app.css")
        @bukStyles
    </head>
    <body class="scroll-smooth bg-white font-spacemono" data-barba="wrapper">
        {{-- Header --}}
        <x-organisms.header color="blue" />
        {{-- Content --}}
        <div
            class="flex min-h-screen flex-col items-center justify-center px-4 pb-4 pt-20 md:px-16 md:pb-16"
            data-barba="container"
            data-barba-namespace="with-cover"
            data-background="--blue"
        >
            {{-- Page transition --}}
            <x-atoms.barba />
            {{-- Content --}}
            <h1 class="text-7xl font-black text-gray-200 md:text-9xl">404</h1>
            <p
                class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
                Uh-oh!
            </p>
            <p class="mt-4 text-gray-500">
                Nous avons perdu la page quelque part.
            </p>
            <x-atoms.link href="{{ url()->previous() }}" class="mt-6">
                Revenir sur la page précédente
            </x-atoms.link>
        </div>
        {{-- Footer --}}
        <x-organisms.footer />
        {{-- Script --}}
        @vite("resources/js/app.js")
        @bukScripts
    </body>
</html>
