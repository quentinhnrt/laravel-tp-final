@extends("base")

@section("content")
    <x-organisms.container>
        <div
            class="flex flex-col-reverse items-center justify-between gap-4 md:flex-row"
        >
            <div class="text-background-700 mt-6 w-full md:mt-0">
                <h1
                    class="text-background-800 text-3xl font-semibold lg:text-4xl dark:text-white"
                >
                    {{ $employee->firstname }} {{ $employee->lastname }}
                </h1>
                <p class="text-background-500 dark:text-background-300 mt-6">
                    Fonction: {{ $employee->function }}
                </p>
                <p class="text-background-500 dark:text-background-300 mt-2">
                    Création: {{ $employee->created_at->format("j F, Y") }}
                </p>
            </div>
            <img
                src="https://xsgames.co/randomusers/avatar.php?g=female"
                width="256"
                height="256"
                alt="photo de profil"
                class="xs:w-2/3 aspect-square h-auto w-full max-w-[300px] rounded-lg object-cover md:w-2/5"
            />
        </div>
    </x-organisms.container>
@endsection
