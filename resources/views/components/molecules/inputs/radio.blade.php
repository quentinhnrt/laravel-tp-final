@props([
    "name" => "radionovalue",
    "label" => "radionovalue",
    "class" => "w-full",
    "required" => false,
    "data" => "",
])

<fieldset @class(["flex flex-col", $class])>
    <legend class="text-background-500 dark:text-background-300 block text-sm text-left">
        {{ $label }}
    </legend>
    <div class="flex w-full flex-wrap gap-4">
        @if (! empty($data))
            @foreach ($data as $item)
                <label
                    tabindex="0"
                    for="{{ $item->name }}"
                    @class([
                        "max-w-[150px] text-center w-full border-background-200 text-background-700 placeholder-background-400/70 focus:border-theme-400 focus:ring-theme-300 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300 mt-2 block w-full rounded-lg border bg-white px-5 py-2.5 focus:outline-none focus:ring focus:ring-opacity-40 has-[:checked]:border-theme-500",
                    ])
                >
                    {{ $item->text }}
                    <input
                        tabindex="-1"
                        type="radio"
                        name="{{ $name }}"
                        value="{{ $item->name }}"
                        id="{{ $item->name }}"
                        class="sr-only"
                        {{--                        @if ($loop->first) checked @endif--}}
                    />
                </label>
            @endforeach
        @endif
    </div>
    @error("{{ $name }}")
    <p class="mt-3 text-xs text-red-400">
        {{ $message }}
    </p>
    @enderror
</fieldset>
