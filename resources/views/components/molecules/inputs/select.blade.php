@props([
    "name" => "selectnovalue",
    "label" => "emailnovalue",
    "class" => "w-full",
    "color" => "blue",
    "required" => false,
    "multiple" => false,
    "firstOption" => "Please select",
    "data" => [
        [
            "name" => "radio1",
            "text" => "Radio 1",
        ],
        [
            "name" => "radio2",
            "text" => "Radio 2",
        ],
    ],
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
            "rounded-[5px] border-2 border-gray-200 py-2 pl-4 pr-12 font-rubik font-[350] leading-relaxed text-black transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50",
            "valid:border-lav-red-500 focus-within:outline-lav-red-600 focus:outline-lav-red-600 focus-visible:outline-lav-red-600" =>
                $color === "red",
            "valid:border-lav-blue-500 focus-within:outline-lav-blue-600 focus:outline-lav-blue-600 focus-visible:outline-lav-blue-600" =>
                $color === "blue",
            "valid:border-lav-green-500 focus-within:outline-lav-green-600 focus:outline-lav-green-600 focus-visible:outline-lav-green-600" =>
                $color === "green",
            "valid:border-lav-orange-500 focus-within:outline-lav-orange-600 focus:outline-lav-orange-600 focus-visible:outline-lav-orange-600" =>
                $color === "orange",
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
