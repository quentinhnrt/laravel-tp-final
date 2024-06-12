<body
    class="@yield('theme', 'theme-purple') min-h-screen bg-white font-roboto dark:bg-background-900"
>
    {{-- Header --}}
    @section('header')
        <x-organisms.header-dash />
    @endsection

    @yield('header')

    {{-- Content --}}
    <main id="main" class="pb-24 pt-[72px]">
        @section('breadcrumb')
            {{ Breadcrumbs::render('home') }}
        @endsection

        @yield('breadcrumb')

        @section('content')
            <div class="flex w-full items-center justify-center">
                <h1 class="text-5xl font-black text-gray-200 md:text-7xl">
                    No content
                </h1>
            </div>
        @endsection

        @yield('content')
    </main>
    {{-- Footer --}}
    @section('footer')
        <x-organisms.footer />
    @endsection

    @yield('footer')

    {{-- Script --}}
    @vite('resources/js/app.js')
    @yield('scripts')
</body>
