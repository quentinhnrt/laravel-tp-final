@props([
    "name" => "textareanovalue",
    "label" => "textareanovalue",
    "class" => "w-full",
    "required" => false,
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
    <x-textarea
        name="{{ $name }}"
        @class([
            "block mt-2 w-full placeholder-background-400/70 dark:placeholder-background-500 rounded-lg border border-background-200 bg-white px-4 h-32 py-2.5 text-background-700 focus:border-theme-400 focus:outline-none focus:ring focus:ring-theme-300 focus:ring-opacity-40 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300",
            "focus:ring-red-300 border-red-400 focus:border-red-300" => $errors->has(
                $name,
            ),
        ])
        required="{{ $required }}"
    />
    @error("{{ $name }}")
        <p class="mt-3 text-xs text-red-400">
            {{ $message }}
        </p>
    @enderror
</div>
