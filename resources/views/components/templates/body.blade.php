<body class="bg-white font-spacemono" data-barba="wrapper">
    <div
        class="min-h-screen px-4 pb-4 pt-20 md:px-16 md:pb-16"
        data-barba="container"
        data-barba-namespace="with-cover"
    >
        <x-atoms.barba />
        @include('partials.header')
        @include('partials.content')
        @include('partials.footer')
    </div>

    @vite('resources/js/app.js')
    @yield('scripts')
    @bukScripts
</body>
