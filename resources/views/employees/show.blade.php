@extends("base")

@section("content")
    <div
        class="flex flex-col-reverse items-center justify-between gap-4 md:flex-row"
    >
        <div class="w-full text-gray-700 md:mt-20">
            <x-atoms.title>
                {{ $employee->firstname }} {{ $employee->lastname }}
            </x-atoms.title>
            <x-atoms.p>Fonction: {{ $employee->function }}</x-atoms.p>
            <x-atoms.p>
                Création: {{ $employee->created_at->format("j F, Y") }}
            </x-atoms.p>
        </div>
        <img
            src="https://xsgames.co/randomusers/avatar.php?g=female"
            width="256"
            height="256"
            alt="photo de profil"
            class="aspect-square h-auto w-2/3 max-w-[300px] rounded-full object-cover md:w-2/5"
        />
    </div>
@endsection
