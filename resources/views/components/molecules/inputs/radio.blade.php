@props([
    "name" => "radionovalue",
    "text" => "radionovalue",
    "value" => "radionovalue",
    "class" => "",
    "checked" => false,
    "disabled" => false,
])

<label
    tabindex="0"
    for="{{ $value }}"
    @class([
        "mt-2 block h-fit w-full w-full max-w-[150px] rounded-lg border border-background-200 bg-white px-5 py-2.5 text-center text-background-700 placeholder-background-400 focus:border-theme-400 focus:outline-none focus:ring focus:ring-theme-300 focus:ring-opacity-40 has-[:checked]:border-theme-500 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300",
        $class,
    ])
>
    {{ $text }}
    <input
        tabindex="-1"
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        id="{{ $value }}"
        class="sr-only"
        @if($disabled) disabled @endif
        @if($checked) checked @endif
    />
</label>
