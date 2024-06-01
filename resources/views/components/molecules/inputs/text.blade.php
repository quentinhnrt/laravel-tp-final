@props([
    'name' => 'novalue',
    'label' => 'novalue',
    'class' => 'w-full',
    'color' => 'gray',
    'required' => false,
    'autocomplete' => 'off',
])
<div @class([
    'flex flex-col gap-2 text-lav-red-600',
    $class,
])>
    <x-label for="{{ $name }}" class="text-lg text-black">{{ $label }}</x-label>
    <x-input
        name="{{ $name }}"
        @class([
            'text-black border-gray-200 border-2 rounded-[5px] px-4 py-2 font-rubik font-[350] leading-relaxed transition duration-300 ease-in-out hover:border-gray-300 hover:bg-gray-100 valid:border-lav-green-600 valid:bg-lav-green-50',
            'focus-visible:outline-lav-red-500 focus:outline-lav-red-500 focus-within:outline-lav-red-500' => $color === 'red',
            'focus-visible:outline-lav-blue-500 focus:outline-lav-blue-500 focus-within:outline-lav-blue-500' =>
                $color === 'gray' || $color === 'blue',
            'focus-visible:outline-lav-green-500 focus:outline-lav-green-500 focus-within:outline-lav-green-500' =>
                $color === 'green',
            'focus-visible:outline-lav-orange-500 focus:outline-lav-orange-500 focus-within:outline-lav-orange-500' =>
                $color === 'orange',
        ])
        required="{{ $required }}"
        autocomplete="{{ $autocomplete }}"
    />
</div>
