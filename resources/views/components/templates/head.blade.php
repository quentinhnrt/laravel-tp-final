<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- Token Laravel --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Title --}}
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset("favicon.ico") }}" />
    {{-- SEO Meta --}}
    <x-social-meta
        title="{{ $title }}"
        description="{{ $description }}"
        image="{{ $image }}"
    />
    @yield("meta")
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet"
    />
    {{-- Styles --}}
    @vite("resources/css/app.css")
    @yield("cdn")
    @bukStyles
</head>
