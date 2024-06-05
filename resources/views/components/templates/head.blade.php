<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- Token Laravel --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Title --}}
    <title>@yield('title', 'No Title')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    {{-- SEO Meta --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'No title')" />
    <meta
        name="description"
        content="@yield('description', 'No description')"
    />
    <meta
        property="og:description"
        content="@yield('description', 'No description')"
    />
    <meta property="og:image" content="@yield('image', 'No image')" />
    <meta property="og:url" content="{{ request()->host() }}" />
    <meta property="og:locale" content="{{ url()->current() }}" />
    @yield('meta')
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet"
    />
    {{-- Styles --}}
    @vite('resources/css/app.css')
    @yield('cdn')
</head>
