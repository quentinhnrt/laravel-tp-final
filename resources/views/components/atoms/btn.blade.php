@props([
    'type' => 'button',
    'color' => 'blue',
    'class' => '',
    'variant' => 'solid',
    'textTransform' => '',
])
<button
    type="{{ $type }}" @class([
        'inline-flex min-h-12 items-center justify-center rounded-[5px] px-12 py-2 text-lg no-underline transition duration-300 ease-in-out !outline-none',
        'bg-lav-blue-500 text-white hover:bg-lav-blue-600 focus-visible:border-lav-blue-600 focus-visible:bg-lav-blue-50 focus-visible:text-black focus:border-lav-blue-600 focus:bg-lav-blue-50 focus:text-black focus-within:border-lav-blue-600 focus-within:bg-lav-blue-50 focus-within:text-black' => $color === 'blue' && $variant === 'solid',
        'border-2 border-lav-blue-500 bg-transparent text-lav-blue-500 hover:border-lav-blue-600 hover:text-lav-blue-600 focus-visible:border-lav-blue-600 focus-visible:bg-lav-blue-50 focus-visible:text-black focus:border-lav-blue-600 focus:bg-lav-blue-50 focus:text-black focus-within:border-lav-blue-600 focus-within:bg-lav-blue-50 focus-within:text-black' =>
            $color === 'blue' && $variant === 'outline',
        'bg-lav-green-500 text-white hover:bg-lav-green-600 focus-visible:border-lav-green-600 focus-visible:bg-lav-green-50 focus-visible:text-black focus:border-lav-green-600 focus:bg-lav-green-50 focus:text-black focus-within:border-lav-green-600 focus-within:bg-lav-green-50 focus-within:text-black' => $color === 'green' && $variant === 'solid',
        'border-2 border-lav-green-500 bg-transparent text-lav-green-500 hover:border-lav-green-600 hover:text-lav-green-600 focus-visible:border-lav-green-600 focus-visible:bg-lav-green-50 focus-visible:text-black focus:border-lav-green-600 focus:bg-lav-green-50 focus:text-black focus-within:border-lav-green-600 focus-within:bg-lav-green-50 focus-within:text-black' =>
            $color === 'green' && $variant === 'outline',
        'bg-lav-orange-500 text-white hover:bg-lav-orange-600 focus-visible:border-lav-orange-600 focus-visible:bg-lav-orange-50 focus-visible:text-black focus:border-lav-orange-600 focus:bg-lav-orange-50 focus:text-black focus-within:border-lav-orange-600 focus-within:bg-lav-orange-50 focus-within:text-black' => $color === 'orange' && $variant === 'solid',
        'border-2 border-lav-orange-500 bg-transparent text-lav-orange-500 hover:border-lav-orange-600 hover:text-lav-orange-600 focus-visible:border-lav-orange-600 focus-visible:bg-lav-orange-50 focus-visible:text-black focus:border-lav-orange-600 focus:bg-lav-orange-50 focus:text-black focus-within:border-lav-orange-600 focus-within:bg-lav-orange-50 focus-within:text-black' =>
            $color === 'orange' && $variant === 'outline',
        'bg-lav-red-500 text-white hover:bg-lav-red-600 focus-visible:border-lav-red-600 focus-visible:bg-lav-red-50 focus-visible:text-black focus:border-lav-red-600 focus:bg-lav-red-50 focus:text-black focus-within:border-lav-red-600 focus-within:bg-lav-red-50 focus-within:text-black' => $color === 'red' && $variant === 'solid',
        'border-2 border-lav-red-500 bg-transparent text-lav-red-500 hover:border-lav-red-600 hover:text-lav-red-600 focus-visible:border-lav-red-600 focus-visible:bg-lav-red-50 focus-visible:text-black focus:border-lav-red-600 focus:bg-lav-red-50 focus:text-black focus-within:border-lav-red-600 focus-within:bg-lav-red-50 focus-within:text-black' =>
            $color === 'red' && $variant === 'outline',
        'uppercase' => $textTransform === 'uppercase',
        $class,
    ])"
>{{ $slot }}</button>
