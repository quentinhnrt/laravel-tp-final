@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center text-sm font-medium text-background-500 bg-transparent cursor-default leading-5 rounded-md">

                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-background-700 bg-white border border-background-300 leading-5 rounded-md hover:text-background-500 focus:outline-none focus:ring ring-background-300 focus:border-blue-300 active:bg-background-100 active:text-background-700 transition ease-in-out duration-150 dark:bg-background-800 dark:border-background-600 dark:text-background-300 dark:focus:border-blue-700 dark:active:bg-background-700 dark:active:text-background-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-background-700 bg-white border border-background-300 leading-5 rounded-md hover:text-background-500 focus:outline-none focus:ring ring-background-300 focus:border-blue-300 active:bg-background-100 active:text-background-700 transition ease-in-out duration-150 dark:bg-background-800 dark:border-background-600 dark:text-background-300 dark:focus:border-blue-700 dark:active:bg-background-700 dark:active:text-background-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center text-sm font-medium text-background-500 bg-transparent cursor-default leading-5 rounded-md">

                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-background-700 leading-5 dark:text-background-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        {{--                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">--}}
                        {{--                            <span--}}
                        {{--                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-theme-500 border border-theme-500 rounded-l-md leading-5 hover:text-theme-800 focus:z-10 focus:outline-none focus:ring ring-theme-300 focus:border-background-300 active:bg-background-100 active:text-theme-800 transition ease-in-out duration-150"--}}
                        {{--                                aria-hidden="true">--}}
                        {{--                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
                        {{--                                    <path fill-rule="evenodd"--}}
                        {{--                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"--}}
                        {{--                                          clip-rule="evenodd"/>--}}
                        {{--                                </svg>--}}
                        {{--                            </span>--}}
                        {{--                        </span>--}}
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                           class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-theme-500 border border-theme-500 rounded-l-md leading-5 hover:text-theme-800 focus:z-10 focus:outline-none focus:ring ring-theme-300 focus:border-background-300 active:bg-background-100 active:text-theme-800 transition ease-in-out duration-150"
                           aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-background-700 bg-white border border-background-300 cursor-default leading-5 dark:bg-background-800 dark:border-background-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            @class([
                                                "relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-background-400 dark:text-background-700 bg-white border cursor-default leading-5 dark:bg-background-800 dark:border-background-600",
                                                "!rounded-l-md" => $paginator->onFirstPage() && $page === 1,
                                                "!rounded-r-md" => !$paginator->hasMorePages() && $loop->last,
                                            ])>{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                       @class([
                                           "relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-background-800 bg-white border leading-5 hover:text-theme-500 focus:z-10 focus:outline-none focus:ring ring-background-300 focus:border-blue-300 active:bg-background-100 active:text-theme-800 transition ease-in-out duration-150 dark:bg-background-800 dark:border-background-600 dark:text-white dark:hover:text-theme-500 dark:active:bg-background-700 dark:focus:border-blue-800",
                                           "!rounded-l-md" => $paginator->onFirstPage() && $page === 1,
                                           "!rounded-r-md" => !$paginator->hasMorePages() && $loop->last,
                                       ])
                                       aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                           class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-theme-500 border border-theme-500 rounded-r-md leading-5 hover:text-theme-800 focus:z-10 focus:outline-none focus:ring ring-theme-300 focus:border-background-300 active:bg-background-100 active:text-theme-800 transition ease-in-out duration-150"
                           aria-label="{{ __('pagination.next') }}">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
<path fill-rule="evenodd"
      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
      clip-rule="evenodd"/>
</svg>
</a>
                    @else
                        {{--                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">--}}
                        {{--                            <span--}}
                        {{--                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-theme-500 border border-theme-500 rounded-r-md leading-5 hover:text-theme-800 focus:z-10 focus:outline-none focus:ring ring-theme-300 focus:border-background-300 active:bg-background-100 active:text-theme-800 transition ease-in-out duration-150"--}}
                        {{--                                aria-hidden="true">--}}
                        {{--                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
                        {{--                                    <path fill-rule="evenodd"--}}
                        {{--                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
                        {{--                                          clip-rule="evenodd"/>--}}
                        {{--                                </svg>--}}
                        {{--                            </span>--}}
                        {{--                        </span>--}}
                    @endif
</span>
            </div>
        </div>
    </nav>
@endif
