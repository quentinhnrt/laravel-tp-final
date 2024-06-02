{{-- resources/views/partials/breadcrumbs.blade.php --}}

@unless ($breadcrumbs->isEmpty())
    <ol
        class="container mx-auto flex items-center overflow-x-auto whitespace-nowrap px-6 py-4"
    >
        @foreach ($breadcrumbs as $breadcrumb)
            @if (! is_null($breadcrumb->url) && $loop->first)
                <li class="breadcrumb-item flex items-center">
                    <a
                        href="{{ $breadcrumb->url }}"
                        class="text-background-600 dark:text-background-200"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                            />
                        </svg>
                        <span class="sr-only">
                            {{ $breadcrumb->title }}
                        </span>
                    </a>
                    @if (! $loop->last)
                        <span
                            class="text-background-500 dark:text-background-300 mx-5"
                        >
                            /
                        </span>
                    @endif
                </li>
            @elseif (! is_null($breadcrumb->url) && ! $loop->last)
                <li class="breadcrumb-item flex items-center">
                    <a
                        href="{{ $breadcrumb->url }}"
                        class="text-background-600 dark:text-background-200 hover:underline"
                    >
                        {{ $breadcrumb->title }}
                    </a>
                    <span
                        class="text-background-500 dark:text-background-300 mx-5"
                    >
                        /
                    </span>
                </li>
            @else
                <li
                    class="breadcrumb-item active dark:text-theme-400 text-theme-600 hover:no-underline"
                >
                    {{ $breadcrumb->title }}
                </li>
            @endif
        @endforeach
    </ol>
@endunless
