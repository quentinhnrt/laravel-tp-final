@props([
    "type" => "h1",
    "class" => "",
    "color" => "gray",
])
<{{ $type }}
    @class([
        "font-bold tracking-tight text-gray-900",
        "mb-8 text-4xl md:text-6xl" => $type === "h1",
        "mb-6 mt-4 text-3xl md:text-5xl" => $type === "h2",
        "mb-6 mt-4 text-2xl md:text-4xl" => $type === "h3",
        "mb-6 mt-4 text-xl md:text-3xl" => $type === "h4",
        "mb-6 mt-4 text-lg md:text-2xl" => $type === "h5",
        "mb-6 mt-4 text-base md:text-xl" => $type === "h6",
        "text-lav-blue-500" => $color === "blue",
        "text-lav-green-500" => $color === "green",
        "text-lav-orange-500" => $color === "orange",
        "text-lav-red-500" => $color === "red",
        "text-gray-900" => $color === "gray",
        $class,
    ])
>
    {{ $slot }}
</{{ $type }}>
