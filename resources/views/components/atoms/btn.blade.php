@props([
    'type' => 'button',
    'class' => '',
    'variant' => 'solid',
])
<button
    type="{{ $type }}" @class([
        'inline-flex min-h-12 items-center justify-center rounded-[5px] px-12 py-2 text-lg no-underline transition duration-300 ease-in-out !outline-none',
        'bg-theme-500 text-white hover:bg-theme-600 focus-visible:border-theme-600 focus-visible:bg-theme-50 focus-visible:text-black focus:border-theme-600 focus:bg-theme-50 focus:text-black focus-within:border-theme-600 focus-within:bg-theme-50 focus-within:text-black' => $variant === 'solid',
        'border-2 border-theme-500 bg-transparent text-theme-500 hover:border-theme-600 hover:text-theme-600 focus-visible:border-theme-600 focus-visible:bg-theme-50 focus-visible:text-black focus:border-theme-600 focus:bg-theme-50 focus:text-black focus-within:border-theme-600 focus-within:bg-theme-50 focus-within:text-black' => $variant === 'outline',
        $class,
    ])"
>{{ $slot }}</button>
