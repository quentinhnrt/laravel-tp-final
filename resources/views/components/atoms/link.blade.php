@props([
    'class' => '',
    'type' => 'button',
    'variant' => 'solid',
    'href' => '#',
    'target' => '_self',
])
<a
    href="{{ $href }}" @if($target === '_blank') target="_blank" rel="noopener" @endif @class([
        '!outline-none inline-flex min-h-12 items-center justify-center rounded-[5px] px-12 py-2 text-lg no-underline transition duration-300 ease-in-out' => $type === 'button',
        'relative inline-flex items-center justify-center overflow-hidden text-black no-underline !outline-none transition duration-300 ease-in-out after:absolute after:bottom-0.5 after:left-0 after:h-0.5 after:w-full after:-translate-x-full after:rounded-lg after:transition after:duration-300 after:ease-in-out focus-within:after:translate-x-0 hover:after:translate-x-0 focus:after:translate-x-0 focus-visible:after:translate-x-0' => $type === 'link',
        'after:bg-theme-500' => $type === 'link',
        'bg-theme-500 text-white hover:bg-theme-600 focus-visible:border-theme-600 focus-visible:bg-theme-50 focus-visible:text-black focus:border-theme-600 focus:bg-theme-50 focus:text-black focus-within:border-theme-600 focus-within:bg-theme-50 focus-within:text-black' => $variant === 'solid' && $type === 'button',
        'border-2 border-theme-500 bg-transparent text-theme-500 hover:border-theme-600 hover:text-theme-600 focus-visible:border-theme-600 focus-visible:bg-theme-50 focus-visible:text-black focus:border-theme-600 focus:bg-theme-50 focus:text-black focus-within:border-theme-600 focus-within:bg-theme-50 focus-within:text-black' =>
            $variant === 'outline' && $type === 'button',
        $class,
    ])"
>{{ $slot }}</a>
