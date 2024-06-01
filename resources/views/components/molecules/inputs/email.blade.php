@props([
    "name" => "emailnovalue",
    "label" => "emailnovalue",
    "class" => "w-full",
    "color" => "blue",
    "required" => false,
    "autocomplete" => "email",
])
<div @class([
    "flex flex-col gap-2 text-lav-red-600",
    $class,
])>
    <x-label for="{{ $name }}" class="text-lg text-black">
        {{ $label }}
    </x-label>
    <x-email
        name="{{ $name }}"
        @class([
            "text-black border-gray-200 border-2 rounded-[5px] px-4 py-2 font-rubik font-[350] leading-relaxed transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50",
            "focus-visible:outline-lav-red-600 focus:outline-lav-red-600 focus-within:outline-lav-red-600 valid:border-lav-red-500" =>
                $color === "red",
            "focus-visible:outline-lav-blue-600 focus:outline-lav-blue-600 focus-within:outline-lav-blue-600 valid:border-lav-blue-500" =>
                $color === "blue",
            "focus-visible:outline-lav-green-600 focus:outline-lav-green-600 focus-within:outline-lav-green-600 valid:border-lav-green-500" =>
                $color === "green",
            "focus-visible:outline-lav-orange-600 focus:outline-lav-orange-600 focus-within:outline-lav-orange-600 valid:border-lav-orange-500" =>
                $color === "orange",
            "!bg-lav-red-50" => $errors->has($name),
        ])
        required="{{ $required }}"
        autocomplete="{{ $autocomplete }}"
    />
    @error("{{ $name }}")
        {{ $message }}
    @enderror
</div>
