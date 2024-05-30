<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $title ?? 'No title' }}</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}" />

        <x-social-meta
            title="{{ $title ?? 'No title'}}"
            description="{{ $description ?? 'No description'}}"
            image="{{ $image ?? 'No image' }}"
        />
        @yield('meta')

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet"
        />
        @vite('resources/css/app.css')
        @yield('cdn')
        @bukStyles
    </head>
    <body class="bg-white font-spacemono" data-barba="wrapper">
        <div data-barba="container" data-barba-namespace="with-cover">
            <div
                class="lav-transition fixed left-0 top-0 z-10 h-screen w-screen translate-y-full bg-lav-blue-500"
            ></div>
            @include('partials.header')
            @include('partials.content')
            @include('partials.footer')
        </div>

        @vite('resources/js/app.js')
        @yield('scripts')
        @bukScripts
    </body>
</html>
