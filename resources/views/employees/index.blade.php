@extends("base")

@section("content")
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-background-800 text-3xl font-semibold lg:text-4xl dark:text-white"
            >
                Listes de
                @if (request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE)
                    developpeur
                @else
                        chefs de projet
                @endif
            </h1>
            {{-- <p --}}
            {{-- class="text-background-500 dark:text-background-300 mt-6" --}}
            {{-- ></p> --}}
        </div>
        <ul
            class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:mt-16 xl:grid-cols-2"
        >
            @if (! empty($employees))
                @foreach ($employees as $employee)
                    <li
                        class="dark:bg-background-800 w-full rounded-lg bg-white text-left shadow-md"
                    >
                        <div class="p-6">
                            <div>
                                <span
                                    class="dark:text-theme-400 text-xs font-medium uppercase text-theme-600"
                                >
                                    {{-- @if ($employee->role === "project_manager") --}}
                                    {{-- Chef de projet --}}
                                    {{-- @else --}}
                                    {{-- Developpeur --}}
                                    {{-- @endif --}}
                                </span>
                                <span
                                    class="text-background-800 mt-2 block transform text-xl font-semibold transition-colors duration-300 dark:text-white"
                                    tabindex="0"
                                    role="link"
                                >
                                    {{ $employee->firstname }}
                                    {{ $employee->lastname }}
                                </span>
                                <p
                                    class="text-background-600 dark:text-background-400 mt-2 text-sm"
                                >
                                    Fonction : {{ $employee->function }}
                                </p>
                            </div>

                            <div class="mt-4">
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3 sm:gap-x-5"
                                >
                                    @php
                                        $viewUrl = request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE ? route("developers.show", $employee) : route("project-managers.show", $employee);
                                    @endphp

                                    <x-atoms.link
                                        type="button"
                                        :href="$viewUrl"
                                    >
                                        Voir
                                    </x-atoms.link>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </x-organisms.container>
@endsection
