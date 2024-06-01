<body class="scroll-smooth bg-white font-spacemono" data-barba="wrapper">
    <div
        data-barba="container"
        data-barba-namespace="with-cover"
        data-background="--{{ $color }}"
        class="min-h-screen px-4 pb-10 pt-24 md:px-16 md:pb-20 md:pt-32"
    >
        {{-- Page transition --}}
        <x-atoms.barba />
        {{-- Header --}}
        <x-organisms.header color="{{ $color }}" />
        {{-- Content --}}
        <main id="main" class="mx-auto max-w-screen-lg">
            @section("content")
                <div class="flex w-full items-center justify-center">
                    <h1 class="text-5xl font-black text-gray-200 md:text-7xl">
                        No content
                    </h1>
                </div>
            @endsection

            @yield("content")
        </main>
        {{-- Footer --}}
        <x-organisms.footer />
    </div>

    {{-- Script --}}
    @vite("resources/js/app.js")
    @yield("scripts")
    @bukScripts
</body>
