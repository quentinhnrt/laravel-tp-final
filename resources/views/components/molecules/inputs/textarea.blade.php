@props([
    "name" => "textareanovalue",
    "label" => "textareanovalue",
    "class" => "w-full",
    "required" => false,
])
<div @class([
    "flex flex-col gap-2 text-lav-red-600",
    $class,
])>
    <x-label for="{{ $name }}" class="text-lg text-black">
        {{ $label }}
    </x-label>
    <x-textarea
        name="{{ $name }}"
        @class([
            "text-black border-gray-200 border-2 rounded-[5px] px-4 py-2 font-rubik font-[350] leading-relaxed transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50 focus-visible:outline-theme-600 focus:outline-theme-600 focus-within:outline-theme-600 valid:border-theme-500",
            "!bg-lav-red-50" => $errors->has($name),
        ])
        required="{{ $required }}"
    />
    @error("{{ $name }}")
        {{ $message }}
    @enderror
</div>
