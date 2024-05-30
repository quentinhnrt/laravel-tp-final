@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                >
                                    FirstName
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                >
                                    LastName
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                >
                                    Fonction
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                >
                                    Role
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                                >
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($employees as $employee)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $employee->firstname }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $employee->lastname }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $employee->function }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $employee->role }}
                                    </td>
                                    <td class="flex items-center gap-4">
                                        <a
                                            class="text-indigo-600 hover:text-indigo-900"
                                            href="{{ route('developers.show', $employee) }}"
                                        >
                                            View
                                        </a>
                                        <a
                                            class="text-indigo-600 hover:text-indigo-900"
                                            href="{{ route('administration.developers.edit', $employee) }}"
                                        >
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('administration.developers.destroy', $employee) }}"
                                            method="POST"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $employee->id }}" />
                                            <button
                                                type="submit"
                                                class="rounded bg-red-500 px-2 py-1 font-bold text-white"
                                            >
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
