@props([
    'color' => 'blue',
    'class' => '',
    'type' => 'button',
    'variant' => 'solid',
    'textTransform' => '',
    'href' => '#',
    'target' => '_self',
])
<a
    href="{{ $href }}" @if($target === '_blank') target="_blank" rel="noopener" @endif @class([
        'inline-flex min-h-12 items-center justify-center rounded-[5px] px-12 py-2 text-lg no-underline transition duration-300 ease-in-out focus-visible:outline-gray-200 focus-visible:border-gray-200 focus-visible:bg-gray-200 focus-visible:text-black focus:border-gray-200 focus:outline-gray-200 focus:bg-gray-200 focus:text-black focus-within:border-gray-200 focus-within:outline-gray-200 focus-within:bg-gray-200 focus-within:text-black' => $type === 'button',
        'bg-lav-blue-500 text-white hover:bg-lav-blue-600' => $color === 'blue' && $variant === 'solid' && $type === 'button',
        'border-2 border-lav-blue-500 bg-transparent text-lav-blue-500 hover:border-lav-blue-600 hover:text-lav-blue-600' =>
            $color === 'blue' && $variant === 'outline' && $type === 'button',
        'bg-lav-green-500 text-white hover:bg-lav-green-600' => $color === 'green' && $variant === 'solid',
        'border-2 border-lav-green-500 bg-transparent text-lav-green-500 hover:border-lav-green-600 hover:text-lav-green-600' =>
            $color === 'green' && $variant === 'outline' && $type === 'button',
        'bg-lav-orange-500 text-white hover:bg-lav-orange-600' => $color === 'orange' && $variant === 'solid',
        'border-2 border-lav-orange-500 bg-transparent text-lav-orange-500 hover:border-lav-orange-600 hover:text-lav-orange-600' =>
            $color === 'orange' && $variant === 'outline' && $type === 'button',
        'bg-lav-red-500 text-white hover:bg-lav-red-600' => $color === 'red' && $variant === 'solid',
        'border-2 border-lav-red-500 bg-transparent text-lav-red-500 hover:border-lav-red-600 hover:text-lav-red-600' =>
            $color === 'red' && $variant === 'outline' && $type === 'button',
        'uppercase' => $textTransform === 'uppercase',
        $class,
    ])"
>{{ $slot }}</a>
