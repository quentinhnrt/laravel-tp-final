@props([
    "name" => "radionovalue",
    "label" => "radionovalue",
    "class" => "w-full",
    "required" => false,
    "data" => "",
])

<fieldset @class(["flex flex-col gap-2 text-lav-red-600", $class])>
    <legend class="mb-2 text-lg text-black">{{ $label }}</legend>
    <div class="flex w-full flex-wrap gap-4">
        @if (! empty($data))
            @foreach ($data as $item)
                <label
                    tabindex="0"
                    for="{{ $item->name }}"
                    @class([
                        "!ring-none flex w-full max-w-[150px] cursor-pointer items-center justify-center rounded-[5px] border-2 border-gray-200 px-4 py-2 font-rubik font-[350] leading-relaxed text-black !outline-none transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-50 border-2 bg-transparent text-black focus-within:border-theme-600 focus-within:bg-theme-50 hover:border-theme-600 hover:text-theme-600 focus:border-theme-600 focus:bg-theme-50 focus-visible:border-theme-600 focus-visible:bg-theme-50 has-[:checked]:border-theme-500 ",
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
                        @if ($item->first) checked @endif
                    />
                </label>
            @endforeach
        @endif
    </div>
    @error("{{ $name }}")
        {{ $message }}
    @enderror
</fieldset>
