@props([
    "type" => "h1",
    "class" => "",
])
<{{ $type }}
    @class([
        "font-bold tracking-tight text-gray-900",
        "text-theme-500 mb-8 text-4xl md:text-6xl" => $type === "h1",
        "mb-6 mt-4 text-3xl md:text-5xl" => $type === "h2",
        "mb-6 mt-4 text-2xl md:text-4xl" => $type === "h3",
        "mb-6 mt-4 text-xl md:text-3xl" => $type === "h4",
        "mb-6 mt-4 text-lg md:text-2xl" => $type === "h5",
        "mb-6 mt-4 text-base md:text-xl" => $type === "h6",
        $class,
    ])
>
    {{ $slot }}
</{{ $type }}>
