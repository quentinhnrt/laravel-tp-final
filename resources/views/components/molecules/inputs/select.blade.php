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
    "flex flex-col gap-2 text-lav-red-600",
    $class,
])>
    <x-label for="{{ $name }}" class="text-lg text-black">
        {{ $label }}
    </x-label>
    <select
        name="{{ $name }}"
        @class([
            "valid:border-theme-500 focus-within:outline-theme-600 focus:outline-theme-600 focus-visible:outline-theme-600 rounded-[5px] border-2 border-gray-200 py-2 pl-4 pr-12 font-rubik font-[350] leading-relaxed text-black transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50",
            "!bg-lav-red-50" => $errors->has($name),
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
        {{ $message }}
    @enderror
</div>
