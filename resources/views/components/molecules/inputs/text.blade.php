@props([
    "name" => "textnovalue",
    "label" => "textnovalue",
    "class" => "w-full",
    "required" => false,
    "autocomplete" => "off",
    "value" => "",
])
<div @class([
    "flex flex-col",
    $class,
])>
    <x-label
        for="{{ $name }}"
        class="text-background-500 dark:text-background-300 block text-left text-sm"
    >
        {{ $label }}
    </x-label>
    <x-input
        name="{{ $name }}"
        @class([
            "mt-2 block w-full placeholder-background-400/70 rounded-lg border border-background-200 bg-white px-5 py-2.5 text-background-700 focus:border-theme-400 focus:outline-none focus:ring focus:ring-theme-300 focus:ring-opacity-40 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300",
            "focus:ring-red-300 border-red-400 focus:border-red-300" => $errors->has(
                $name,
            ),
        ])
        required="{{ $required }}"
        autocomplete="{{ $autocomplete }}"
        value="{{ $value }}"
    />
    @error("{{ $name }}")
        <p class="mt-3 text-xs text-red-400">
            {{ $message }}
        </p>
    @enderror
</div>
