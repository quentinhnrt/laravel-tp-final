@extends("base")

@section("title", "Employees")

@section("content")
    <x-atoms.title>
        Liste des
        @if (request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE)
            developpeurs
        @else
                chefs de projets
        @endif
    </x-atoms.title>
    <ul class="flex w-full flex-col gap-4">
        @if (! empty($employees))
            @foreach ($employees as $employee)
                <li class="w-full">
                    <div
                        class="flex w-full flex-col gap-x-4 gap-y-4 md:flex-row md:items-center"
                    >
                        <div>
                            <div
                                class="mb-2 flex flex-nowrap items-center gap-3"
                            >
                                <span class="text-2xl md:text-3xl">
                                    {{ $employee->firstname }}
                                    {{ $employee->lastname }}
                                </span>
                                @if ($employee->role === "project_manager")
                                    <span
                                        class="md:text-md inline-flex h-fit gap-2 rounded bg-lav-red-50 p-1 text-xs font-medium text-lav-red-600"
                                    >
                                        Chef de projet
                                    </span>
                                @else
                                    <span
                                        class="md:text-md inline-flex h-fit gap-2 rounded bg-lav-blue-50 p-1 text-xs font-medium text-lav-blue-600"
                                    >
                                        Developpeur
                                    </span>
                                @endif
                            </div>
                            <span
                                class="font-rubik text-base font-[350] leading-relaxed text-gray-700"
                            >
                                Function : {{ $employee->function }}
                            </span>
                        </div>

                        <div
                            class="flex flex-1 items-center justify-between gap-4 md:justify-end"
                        >
                            <div class="flex items-center gap-4">
                                @php
                                    $viewUrl = request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE ? route("developers.show", $employee) : route("project-managers.show", $employee);
                                    $editUrl = request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE ? route("administration.developers.edit", $employee) : route("administration.project-managers.edit", $employee);
                                    $actionForm = request()->attributes->get("role") === App\Models\Employee::DEVELOPER_ROLE ? route("administration.developers.destroy", $employee) : route("administration.project-managers.destroy", $employee);
                                @endphp

                                <x-atoms.link
                                    type="link"
                                    class="text-base md:text-lg"
                                    :href="$viewUrl"
                                >
                                    Voir
                                </x-atoms.link>
                                <x-atoms.link
                                    type="link"
                                    class="text-base md:text-lg"
                                    :href="$editUrl"
                                >
                                    Editer
                                </x-atoms.link>
                            </div>
                            <form action="{{ $actionForm }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input
                                    type="hidden"
                                    name="id"
                                    value="{{ $employee->id }}"
                                />
                                <x-atoms.btn
                                    type="submit"
                                    color="red"
                                    class="px-6 py-2 text-lg"
                                >
                                    Supprimer
                                </x-atoms.btn>
                            </form>
                        </div>
                    </div>
                    @if (! $loop->last)
                        <hr class="mt-4 h-1 w-full border-gray-200" />
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
@endsection
