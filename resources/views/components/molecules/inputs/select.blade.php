@props([
    "name" => "selectnovalue",
    "label" => "emailnovalue",
    "class" => "w-full",
    "required" => false,
    "multiple" => false,
    "disabled" => false,
    "max" => "null",
    "jsoverride" => true,
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
    <select
        name="{{ $name }}"
        @class([
            "mt-2 block w-full rounded-lg border border-background-200 bg-white px-5 py-2.5 text-background-700 placeholder-background-400 focus:border-theme-400 focus:outline-none focus:ring focus:ring-theme-300 focus:ring-opacity-40 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300" =>
                $jsoverride !== true,
            "border-red-400 focus:border-red-300 focus:ring-red-300" =>
                $jsoverride !== true && $errors->has($name),
            "error" => $jsoverride == true && $errors->has($name),
            "select-multiple" => $multiple === "true" && $jsoverride === true,
            "select-single" => $multiple === false && $jsoverride === true,
        ])
        data-max="{{ $max }}"
        @if($disabled) disabled @endif
        @if($required) required @endif
        @if($multiple) multiple @endif
    >
        {{ $slot }}
    </select>
    @error($name)
        <p class="mt-3 text-xs text-red-400">
            {{ $message }}
        </p>
    @enderror
</div>
