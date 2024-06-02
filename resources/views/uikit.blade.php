@props([
    "color" => "green",
])

@extends("base")

@section("content")
    <div class="flex flex-col">
        <x-atoms.title color="{{ $color }}">Title 1</x-atoms.title>
        <x-atoms.p>
            Lorem ipsum
            <x-atoms.code>dolor</x-atoms.code>
            sit amet, consectetur adipiscing
            <x-atoms.link href="#" type="link" color="{{ $color }}">
                elit
            </x-atoms.link>
            , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
        </x-atoms.p>
        <x-atoms.title type="h2">Title 2</x-atoms.title>
        <x-atoms.title type="h3">Title 3</x-atoms.title>
        <x-atoms.title type="h4">Title 4</x-atoms.title>
        <x-atoms.title type="h5">Title 5</x-atoms.title>
        <x-atoms.title type="h6">Title 6</x-atoms.title>
        <div class="grid grid-cols-4 grid-rows-1 gap-4">
            <x-atoms.btn
                label="button"
                color="red"
                variant="outline"
                textTransform="uppercase"
            >
                Test
            </x-atoms.btn>
            <x-atoms.btn label="button" color="green" class="w-fit">
                Test
            </x-atoms.btn>
            <x-atoms.link label="Test" color="orange" variant="outline">
                Test
            </x-atoms.link>
            <x-atoms.link
                href="/404"
                label="Test"
                color="{{ $color }}"
                class="w-fit"
                textTransform="uppercase"
            >
                Test
            </x-atoms.link>
        </div>
        <x-form
            action="http://example.com"
            class="mx-[-8px] my-4 flex flex-wrap gap-y-4"
        >
            <x-molecules.inputs.text
                label="Name"
                name="name"
                class="w-full px-2 md:w-1/2"
                color="{{ $color }}"
            />
            <x-molecules.inputs.email
                label="Email"
                name="email"
                class="w-full px-2 md:w-1/2"
                color="{{ $color }}"
            />
            <x-molecules.inputs.radio
                label="Radio"
                name="radio"
                class="w-full px-2 md:w-1/2"
                color="{{ $color }}"
            />
            <x-molecules.inputs.textarea
                label="Textarea"
                name="textarea"
                class="w-full px-2 md:w-1/2"
                color="{{ $color }}"
            />
            <x-molecules.inputs.select
                label="Select"
                name="select"
                class="w-full px-2 md:w-1/2"
                color="{{ $color }}"
            />
            <x-atoms.btn type="submit" color="{{ $color }}" class="mx-2 w-full">
                Submit
            </x-atoms.btn>
        </x-form>
    </div>
@endsection
