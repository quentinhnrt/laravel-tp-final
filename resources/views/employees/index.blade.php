@extends('base')

@section('content')
    <div>
        @forelse ($employees as $employee)
            <div class="mb-4 border border-black p-4">
                <h1>{{ $employee->firstname }}</h1>
                <p>{{ $employee->lastname }}</p>
                <p>{{ $employee->function }}</p>
                <a
                    class="block w-fit rounded bg-blue-500 px-4 py-1 text-white"
                    href="{{ request()->attributes->get('role') === App\Models\Employee::DEVELOPER_ROLE ? route('developers.show', $employee) : route('project-managers.show', $employee) }}"
                >
                    View
                </a>
            </div>
        @empty
            <p>No employees found.</p>
        @endforelse
    </div>
@endsection
