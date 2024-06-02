@extends("base")

@section("meta")
    <meta name="robots" content="noindex, nofollow" />
@endsection

@section("breadcrumb")
    {{ Breadcrumbs::render("home") }}
@endsection

@section("content")
    <section
        class="section dark:bg-background-900 flex bg-white md:items-center"
    >
        <div
            class="container mx-auto h-fit px-6 pb-12 pt-4 lg:flex lg:items-center lg:gap-12"
        >
            <div class="w-full lg:w-1/2">
                <p
                    class="dark:text-theme-400 text-sm font-medium text-theme-500"
                >
                    404 error
                </p>
                <h1
                    class="text-background-800 mt-3 text-2xl font-semibold md:text-3xl dark:text-white"
                >
                    We lost this page
                </h1>
                <p class="text-background-500 dark:text-background-400 mt-4">
                    Sorry, the page you are looking for doesn't exist.
                </p>

                <div class="mt-6 flex items-center gap-x-3">
                    <button
                        class="text-background-700 hover:bg-background-100 dark:border-background-700 dark:bg-background-900 dark:text-background-200 dark:hover:bg-background-800 flex w-1/2 items-center justify-center gap-x-2 rounded-lg border bg-white px-5 py-2 text-sm transition-colors duration-200 sm:w-auto"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-5 w-5 rtl:rotate-180"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                            />
                        </svg>

                        <span>Go back</span>
                    </button>

                    <button
                        class="w-1/2 shrink-0 rounded-lg bg-theme-500 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 hover:bg-theme-600 sm:w-auto dark:bg-theme-600 dark:hover:bg-theme-500"
                    >
                        Take me home
                    </button>
                </div>

                <div class="mt-10 space-y-6">
                    <div>
                        <a
                            href="#"
                            class="dark:text-theme-400 inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline"
                        >
                            <span>Documentation</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="text-background-500 dark:text-background-400 mt-2 text-sm"
                        >
                            Dive in to learn all about our product.
                        </p>
                    </div>

                    <div>
                        <a
                            href="#"
                            class="dark:text-theme-400 inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline"
                        >
                            <span>Our blog</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="text-background-500 dark:text-background-400 mt-2 text-sm"
                        >
                            Read the latest posts on our blog.
                        </p>
                    </div>

                    <div>
                        <a
                            href="#"
                            class="dark:text-theme-400 inline-flex items-center gap-x-2 text-sm text-theme-500 hover:underline"
                        >
                            <span>Chat to support</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5 rtl:rotate-180"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                                />
                            </svg>
                        </a>

                        <p
                            class="text-background-500 dark:text-background-400 mt-2 text-sm"
                        >
                            Our friendly team is here to help.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative mt-8 w-full lg:mt-0 lg:w-1/2">
                <img
                    class="h-80 w-full rounded-lg object-cover md:h-96 lg:h-[32rem]"
                    src="https://images.unsplash.com/photo-1508881598441-324f3974994b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                    alt=""
                />
            </div>
        </div>
    </section>
@endsection
