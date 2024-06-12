<header id="header" class="fixed z-50 w-screen">
    <nav
        x-data="{ isOpen: false }"
        class="relative bg-white shadow dark:bg-background-800"
    >
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center">
                    <x-atoms.logo class="h-7 w-auto fill-theme-500" />
                    <span
                        class="mx-2 my-2 transform text-background-700 transition-colors duration-300 hover:text-theme-500 dark:text-background-200 dark:hover:text-theme-400"
                    >
                        / Dash
                    </span>
                </a>

                <!-- Mobile menu button -->
                <div class="flex">
                    <button
                        x-cloak
                        @click="isOpen = !isOpen"
                        type="button"
                        class="text-background-500 hover:text-background-600 focus:text-background-600 focus:outline-none dark:text-background-200 dark:hover:text-background-400 dark:focus:text-background-400"
                        aria-label="toggle menu"
                    >
                        <svg
                            x-show="!isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            :class="[isOpen ? '!hidden' : '!block']"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 8h16M4 16h16"
                            />
                        </svg>

                        <svg
                            x-show="isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            :class="[!isOpen ? '!hidden' : '!block']"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            style="display: none"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div
                x-cloak
                :class="[isOpen ? 'translate-x-0 !opacity-100 ' : '!opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full bg-white transition-all duration-300 ease-in-out dark:bg-background-800"
                style="opacity: 0"
            >
                <div class="container mx-auto flex flex-col px-6 py-12">
                    <a
                        class="theme-purple my-2 transform text-background-700 transition-colors duration-300 hover:text-theme-500 dark:text-background-200 dark:hover:text-theme-400"
                        href="{{ route('home') }}"
                    >
                        Accueil
                    </a>
                    <a
                        class="theme-blue my-2 transform text-background-700 transition-colors duration-300 hover:text-theme-500 dark:text-background-200 dark:hover:text-theme-400"
                        href="{{ route('dashboard.index') }}"
                    >
                        Administration
                    </a>
                    <a
                        class="theme-red my-2 transform text-background-700 transition-colors duration-300 hover:text-theme-500 dark:text-background-200 dark:hover:text-theme-400"
                        href="{{ route('project-managers.index') }}"
                    >
                        Chefs de projet
                    </a>
                    <a
                        class="theme-green my-2 transform text-background-700 transition-colors duration-300 hover:text-theme-500 dark:text-background-200 dark:hover:text-theme-400"
                        href="{{ route('developers.index') }}"
                    >
                        Développeurs
                    </a>
                    {{-- <x-atoms.btn class="mt-4 w-full md:w-fit"> --}}
                    {{-- Get started --}}
                    {{-- </x-atoms.btn> --}}
                </div>
            </div>
        </div>
    </nav>
</header>
