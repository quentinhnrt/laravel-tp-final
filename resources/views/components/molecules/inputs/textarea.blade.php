@props([
    "name" => "textareanovalue",
    "label" => "textareanovalue",
    "class" => "w-full",
    "value" => "",
    "required" => false,
    "disabled" => false,
    "placeholder" => "Content ...",
])

<div @class([
    "flex flex-col",
    $class,
])>
    <label
        for="{{ $name }}"
        class="block text-left text-sm text-background-500 dark:text-background-300"
    >
        {{ $label }}
    </label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        @class([
            "mt-2 block h-32 w-full rounded-lg border border-background-200 bg-white px-4 py-2.5 text-background-700 placeholder-background-400 focus:border-theme-400 focus:outline-none focus:ring focus:ring-theme-300 focus:ring-opacity-40 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:placeholder-background-500 dark:focus:border-theme-300",
            "border-red-400 focus:border-red-300 focus:ring-red-300" => $errors->has(
                $name,
            ),
        ])
        placeholder="{{ $placeholder }}"
        @if($disabled) disabled @endif
        @if($required) required @endif
    >
{{ $value }}</textarea
    >
    @error("{{ $name }}")
        <p class="mt-3 text-xs text-red-400">
            {{ $message }}
        </p>
    @enderror
</div>
