@extends('base')

@section('content')
    <x-organisms.container>
        <p class="text-background-500 dark:text-background-300">
            Lorem ipsum sit amet, consectetur adipiscing
            <x-atoms.link href="#" type="link">elit</x-atoms.link>
            , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
        </p>
        <div class="mt-6 grid grid-cols-4 grid-rows-1 gap-4">
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
                class="w-fit"
                textTransform="uppercase"
            >
                Test
            </x-atoms.link>
        </div>
        <form
            action="http://example.com"
            class="mx-[-8px] my-4 mt-6 flex flex-wrap gap-y-4"
        >
            <x-molecules.inputs.text
                label="Name"
                name="name"
                class="w-full px-2 md:w-1/2"
            />
            <x-molecules.inputs.email
                label="Email"
                name="email"
                class="w-full px-2 md:w-1/2"
            />
            <x-molecules.inputs.radio-container
                label="Radio"
                name="radio"
                class="w-full px-2 md:w-1/2"
            >
                <x-molecules.inputs.radio
                    label="Radio"
                    name="radio"
                    class="w-full px-2 md:w-1/2"
                />
            </x-molecules.inputs.radio-container>
            <x-molecules.inputs.textarea
                label="Textarea"
                name="textarea"
                class="w-full px-2 md:w-1/2"
                disabled="true"
            />
            <x-molecules.inputs.select
                label="Select"
                name="select"
                class="w-full px-2 md:w-1/2"
            >
                <option value="">Select a person...</option>
                <option value="4" selected>Thomas Edison</option>
                <option value="1">Nikola</option>
                <option value="3">Nikola Tesla</option>
                <option value="5">Arnold Schwarzenegger</option>
            </x-molecules.inputs.select>
            <x-molecules.inputs.select
                label="Test"
                name="test"
                class="w-full px-2 md:w-1/2"
                jsoverride="false"
            >
                <option value="" selected>Select a person...</option>
                <option value="4">Thomas Edison</option>
                <option value="1">Nikola</option>
                <option value="3">Nikola Tesla</option>
                <option value="5">Arnold Schwarzenegger</option>
            </x-molecules.inputs.select>
            <x-molecules.inputs.select
                label="Test"
                name="test"
                class="w-full px-2 md:w-1/2"
                multiple="true"
            >
                <option value="" selected>Select a person...</option>
                <option value="4">Thomas Edison</option>
                <option value="1">Nikola</option>
                <option value="3">Nikola Tesla</option>
                <option value="5">Arnold Schwarzenegger</option>
            </x-molecules.inputs.select>
            <x-atoms.btn type="submit" class="mx-2 mt-6 w-full">
                Submit
            </x-atoms.btn>
        </form>
    </x-organisms.container>
@endsection
