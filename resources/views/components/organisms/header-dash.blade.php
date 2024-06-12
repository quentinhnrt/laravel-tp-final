<header id="header" class="header-dash fixed z-50 w-screen">
    <nav
        x-data="{ isOpen: false }"
        class="relative bg-white shadow dark:bg-background-800"
    >
        <div class="mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="#" class="flex items-center">
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
                :class="[isOpen ? 'isOpen translate-x-0 !opacity-100 ' : 'isClose !opacity-0 -translate-x-full']"
                class="menu fixed inset-x-0 top-0 -z-10 h-screen w-full bg-white pt-[72px] shadow transition-all duration-300 ease-in-out lg:w-1/5 lg:min-w-64 dark:bg-background-800"
                style="opacity: 0"
            >
                <div
                    class="mt-6 flex flex-1 flex-col justify-between px-6 py-12 pt-2"
                >
                    <nav class="-mx-3 space-y-6">
                        <div class="space-y-3">
                            <label
                                class="px-3 text-xs uppercase text-background-500 dark:text-background-400"
                            >
                                Développeurs
                            </label>

                            <x-atoms.link
                                href="#"
                                type="link"
                                class="!underline-none flex transform px-3 py-2 !text-background-700 transition-colors duration-300 hover:!text-theme-500 dark:!text-background-200 dark:hover:!text-theme-400"
                            >
                                <span class="mx-2 text-sm font-medium">
                                    Lien
                                </span>
                            </x-atoms.link>
                        </div>
                        <div class="space-y-3">
                            <label
                                class="px-3 text-xs uppercase text-background-500 dark:text-background-400"
                            >
                                Chefs de projet
                            </label>

                            <x-atoms.link
                                href="#"
                                type="link"
                                class="!underline-none flex transform px-3 py-2 !text-background-700 transition-colors duration-300 hover:!text-theme-500 dark:!text-background-200 dark:hover:!text-theme-400"
                            >
                                <span class="mx-2 text-sm font-medium">
                                    Liens
                                </span>
                            </x-atoms.link>
                        </div>
                        <div class="space-y-3">
                            <label
                                class="px-3 text-xs uppercase text-background-500 dark:text-background-400"
                            >
                                Projets
                            </label>

                            <x-atoms.link
                                href="#"
                                type="link"
                                class="!underline-none flex transform px-3 py-2 !text-background-700 transition-colors duration-300 hover:!text-theme-500 dark:!text-background-200 dark:hover:!text-theme-400"
                            >
                                <span class="mx-2 text-sm font-medium">
                                    Liens
                                </span>
                            </x-atoms.link>
                        </div>
                        <div class="space-y-3">
                            <label
                                class="px-3 text-xs uppercase text-background-500 dark:text-background-400"
                            >
                                Tâches
                            </label>

                            <x-atoms.link
                                href="#"
                                type="link"
                                class="!underline-none flex transform px-3 py-2 !text-background-700 transition-colors duration-300 hover:!text-theme-500 dark:!text-background-200 dark:hover:!text-theme-400"
                            >
                                <span class="mx-2 text-sm font-medium">
                                    Liens
                                </span>
                            </x-atoms.link>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>
