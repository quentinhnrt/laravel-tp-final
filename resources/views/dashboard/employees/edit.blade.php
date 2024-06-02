@extends("base")

@section("title", "Employees creation")

@section("content")
    <x-organisms.container>
        <div class="mx-auto max-w-lg">
            <h1
                class="text-background-800 text-3xl font-semibold lg:text-4xl dark:text-white"
            >
                Modifier un
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
        @include("dashboard.employees.form", ["employee" => $employee])
    </x-organisms.container>
@endsection
