@props([
    'type' => 'button',
    'class' => '',
    'variant' => 'solid',
])
<button
    type="{{ $type }}" @class([
        'h-fit block px-2 py-1 md:px-5 md:py-2 text-white transition-colors duration-300 transform bg-theme-600 rounded-md hover:bg-theme-400 border border-theme-600 hover:border-theme-400 focus:outline-none focus:bg-theme-400 text-center' => $variant === 'solid',
        'h-fit block px-2 py-1 md:px-5 md:py-2 dark:border-background-600 text-center text-background-700 transition-colors duration-300 transform border rounded-md dark:hover:bg-background-700 dark:text-white lg:mt-0 hover:bg-background-100 lg:w-auto' => $variant === 'outline',
        $class,
    ])"
>{{ $slot }}</button>
