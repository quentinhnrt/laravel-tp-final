@props([
    "name" => "radionovalue",
    "label" => "radionovalue",
    "class" => "w-full",
])

<fieldset @class(["flex flex-col", $class])>
    <legend
        class="block text-left text-sm text-background-500 dark:text-background-300"
    >
        {{ $label }}
    </legend>
    <div class="flex w-full flex-wrap gap-4">
        {{ $slot }}
    </div>
    @error("{{ $name }}")
    <p class="mt-3 text-xs text-red-400">
        {{  $message }}
    </p>
    @enderror
</fieldset>
