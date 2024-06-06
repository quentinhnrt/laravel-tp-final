<body
    class="theme- theme-red min-h-screen bg-white font-roboto dark:bg-background-900"
>
    {{-- Header --}}
    <x-organisms.header />
    {{-- Content --}}
    <main id="main">
        @section("breadcrumb")
            {{ Breadcrumbs::render("home") }}
        @endsection

        @yield("breadcrumb")

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

    {{-- Script --}}
    @vite("resources/js/app.js")
    @yield("scripts")
</body>
