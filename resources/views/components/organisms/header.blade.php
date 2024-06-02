<header
    id="header"
    class="fixed left-0 top-0 z-10 block w-screen border-t-2 bg-white px-4 py-4 md:px-10 md:py-8"
>
    <div
        class="mx-auto flex max-w-screen-lg flex-col items-center md:flex-row md:justify-between"
    >
        <div class="flex w-full flex-nowrap items-center gap-3 md:w-fit">
            <a
                class="bg-theme-500 hover:bg-theme-600 flex w-fit rounded-full p-3 outline-none transition duration-300 ease-in-out focus-within:bg-gray-700 focus:bg-gray-700 focus-visible:bg-gray-700"
                href=""
            >
                <span class="sr-only">Retour à l'accueil</span>
                <img
                    src="{{ asset("logo.svg") }}"
                    alt=""
                    width="32"
                    height="32"
                />
            </a>
            <span
                class="none text-theme-500 font-rubik text-2xl font-normal uppercase leading-relaxed md:inline"
            >
                / Dash
            </span>
        </div>
        <div class="flex flex-wrap items-center gap-x-4">
            <div class="dropdown relative inline-block">
                <button
                    class="after:bg-theme-500 relative inline-flex min-h-12 items-center justify-center overflow-hidden bg-transparent text-lg text-black no-underline !outline-none transition duration-300 ease-in-out after:absolute after:bottom-1.5 after:left-0 after:h-1 after:w-full after:-translate-x-full after:rounded-lg after:transition after:duration-300 after:ease-in-out focus-within:after:translate-x-0 hover:after:translate-x-0 focus:after:translate-x-0 focus-visible:after:translate-x-0"
                >
                    <span>Administration</span>
                </button>
                <ul
                    class="dropdown-content absolute right-0 hidden min-w-[150px] rounded-[5px] border-2 border-gray-200 bg-white text-black"
                >
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 1
                        </a>
                    </li>
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 2
                        </a>
                    </li>
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 3
                        </a>
                    </li>
                    {{-- <li class="dropdown relative"> --}}
                    {{-- <a --}}
                    {{-- class="whitespace-no-wrap block bg-gray-50 px-6 py-2 hover:bg-theme-50 hover:text-theme-600" --}}
                    {{-- href="#" --}}
                    {{-- > --}}
                    {{-- Option 4 ? --}}
                    {{-- </a> --}}
                    {{-- <ul --}}
                    {{-- class="dropdown-content absolute right-full top-0 hidden min-w-[150px] rounded-[5px] border-2 border-gray-200 bg-white text-black" --}}
                    {{-- > --}}
                    {{-- <li> --}}
                    {{-- <a --}}
                    {{-- class="whitespace-no-wrap block bg-gray-50 px-6 py-2 hover:bg-theme-50 hover:text-theme-600" --}}
                    {{-- href="#" --}}
                    {{-- > --}}
                    {{-- Option 3-1 --}}
                    {{-- </a> --}}
                    {{-- </li> --}}

                    {{-- <li> --}}
                    {{-- <a --}}
                    {{-- class="whitespace-no-wrap block bg-gray-50 px-6 py-2 hover:bg-theme-50 hover:text-theme-600" --}}
                    {{-- href="#" --}}
                    {{-- > --}}
                    {{-- Option 3-2 --}}
                    {{-- </a> --}}
                    {{-- </li> --}}
                    {{-- </ul> --}}
                    {{-- </li> --}}
                </ul>
            </div>
            <div class="dropdown relative inline-block">
                <button
                    class="after:bg-theme-500 relative inline-flex min-h-12 items-center justify-center overflow-hidden bg-transparent text-lg text-black no-underline !outline-none transition duration-300 ease-in-out after:absolute after:bottom-1.5 after:left-0 after:h-1 after:w-full after:-translate-x-full after:rounded-lg after:transition after:duration-300 after:ease-in-out focus-within:after:translate-x-0 hover:after:translate-x-0 focus:after:translate-x-0 focus-visible:after:translate-x-0"
                >
                    <span>Autres</span>
                </button>
                <ul
                    class="dropdown-content absolute right-0 hidden min-w-[150px] rounded-[5px] border-2 border-gray-200 bg-white text-black"
                >
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 1
                        </a>
                    </li>
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 2
                        </a>
                    </li>
                    <li>
                        <a
                            class="whitespace-no-wrap hover:bg-theme-50 hover:text-theme-600 block bg-gray-50 px-6 py-2"
                            href="#"
                        >
                            Option 3
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
