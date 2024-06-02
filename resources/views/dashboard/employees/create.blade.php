@extends("base")

@section("title", "Employees creation")

@section("content")
    <x-atoms.title>
        Ajouter un
        @if (request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE)
            developpeur
        @else
                chefs de projet
        @endif
    </x-atoms.title>
    @include("dashboard.employees.form")
@endsection
