@props([
    "name" => "radionovalue",
    "label" => "radionovalue",
    "class" => "w-full",
    "color" => "blue",
    "required" => false,
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

<fieldset @class(["flex flex-col gap-2 text-lav-red-600", $class])>
    <legend class="mb-2 text-lg text-black">{{ $label }}</legend>
    <div class="flex w-full flex-nowrap gap-4">
        @if (! empty($data))
            @foreach ($data as $item)
                <label
                    tabindex="0"
                    for="{{ $item["name"] }}"
                    @class([
                        "!ring-none flex w-full max-w-[150px] cursor-pointer items-center justify-center rounded-[5px] border-2 border-gray-200 px-4 py-2 font-rubik font-[350] leading-relaxed text-black !outline-none transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50",
                        "border-2 bg-transparent text-black focus-within:border-lav-red-600 focus-within:bg-lav-red-50 hover:border-lav-red-600 hover:text-lav-red-600 focus:border-lav-red-600 focus:bg-lav-red-50 focus-visible:border-lav-red-600 focus-visible:bg-lav-red-50 has-[:checked]:border-lav-red-500 " =>
                            $color === "red",
                        "border-2 bg-transparent text-black focus-within:border-lav-blue-600 focus-within:bg-lav-blue-50 hover:border-lav-blue-600 hover:text-lav-blue-600 focus:border-lav-blue-600 focus:bg-lav-blue-50 focus-visible:border-lav-blue-600 focus-visible:bg-lav-blue-50 has-[:checked]:border-lav-blue-500 " =>
                            $color === "blue",
                        "border-2 bg-transparent text-black focus-within:border-lav-green-600 focus-within:bg-lav-green-50 hover:border-lav-green-600 hover:text-lav-green-600 focus:border-lav-green-600 focus:bg-lav-green-50 focus-visible:border-lav-green-600 focus-visible:bg-lav-green-50 has-[:checked]:border-green-500 " =>
                            $color === "green",
                        "border-2 bg-transparent text-black focus-within:border-lav-orange-600 focus-within:bg-lav-orange-50 hover:border-lav-orange-600 hover:text-lav-orange-600 focus:border-lav-orange-600 focus:bg-lav-orange-50 focus-visible:border-lav-orange-600 focus-visible:bg-lav-orange-50 has-[:checked]:border-orange-500 " =>
                            $color === "orange",
                    ])
                >
                    {{ $item["text"] }}
                    <input
                        tabindex="-1"
                        type="radio"
                        name="{{ $name }}"
                        value="{{ $item["name"] }}"
                        id="{{ $item["name"] }}"
                        class="sr-only"
                        {{--                        @if ($item->first) checked @endif--}}
                    />
                </label>
            @endforeach
        @endif
    </div>
    @error("{{ $name }}")
    {{ $message }}
    @enderror
</fieldset>
