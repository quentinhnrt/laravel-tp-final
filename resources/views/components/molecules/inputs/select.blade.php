@props([
    "name" => "selectnovalue",
    "label" => "emailnovalue",
    "class" => "w-full",
    "required" => false,
    "multiple" => false,
    "firstOption" => "Please select",
    "data" => "",
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
    <select
        name="{{ $name }}"
        @class([
            "border-background-200 text-background-700 placeholder-background-400/70 focus:border-theme-400 focus:ring-theme-300 dark:border-background-600 dark:bg-background-900 dark:text-background-300 dark:focus:border-theme-300 mt-2 block w-full rounded-lg border bg-white px-5 py-2.5 focus:outline-none focus:ring focus:ring-opacity-40",
            "border-red-400 focus:border-red-300 focus:ring-red-300" => $errors->has(
                $name,
            ),
        ])
        required="{{ $required }}"
        @if ($multiple)
            multiple
        @endif
    >
        <option value="">Please select</option>
        @if (! empty($data))
            @foreach ($data as $item)
                <option value="{{ $item["name"] }}">
                    {{ $item["text"] }}
                </option>
            @endforeach
        @endif
    </select>
    @error("{{ $name }}")
        <p class="mt-3 text-xs text-red-400">
            {{ $message }}
        </p>
    @enderror
</div>
