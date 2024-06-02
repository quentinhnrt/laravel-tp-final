@props([
    'class' => '',
    'type' => 'button',
    'variant' => 'solid',
    'href' => '#',
    'target' => '_self',
])
<a
    href="{{ $href }}" @if($target === '_blank') target="_blank" rel="noopener" @endif @class([
        'h-fit block px-2 py-1 md:px-5 md:py-2  text-white transition-colors duration-300 transform bg-theme-600 rounded-md hover:bg-theme-400 border border-theme-600 hover:border-theme-400 focus:outline-none focus:bg-theme-400 text-center' => $type === 'button' && $variant === 'solid',
        'h-fit dark:border-background-600 block px-2 py-1 md:px-5 md:py-2  text-center text-background-700 transition-colors duration-300 transform border rounded-md dark:hover:bg-background-700 dark:text-white lg:mt-0 hover:bg-background-100 lg:w-auto' => $variant === 'outline' && $type === 'button',
        'inline-block mt-2 text-theme-500 underline hover:text-theme-400' => $type === 'link' && $variant === 'solid',
        $class,
    ])"
>{{ $slot }}</a>
