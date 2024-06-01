@props([
    "color" => "blue",
])
<header
    id="header"
    class="fixed left-0 top-0 z-10 block w-screen border-t-2 bg-white px-4 py-4 md:px-10 md:py-8"
>
    <div
        class="mx-auto flex max-w-screen-lg flex-nowrap items-center justify-between"
    >
        <div class="flex flex-nowrap items-center gap-3">
            <a
                @class([
                    "flex w-fit rounded-full p-3",
                    "bg-lav-blue-500 hover:bg-lav-blue-600" => $color == "blue",
                    "bg-lav-green-500 hover:bg-lav-green-600" => $color == "green",
                    "bg-lav-orange-500 hover:bg-lav-orange-600" => $color == "orange",
                    "bg-lav-red-500 hover:bg-lav-red-600" => $color == "red",
                ])
                href=""
            >
                <span class="sr-only">Retour à l'accueil</span>
                <img
                    src="{{ asset("logo.svg") }}"
                    alt=""
                    width="32"
                    height="32"
                />
            </a>
            <span
                @class([
                    "font-spacemono text-4xl font-semibold",
                    "text-lav-blue-500" => $color == "blue",
                    "text-lav-green-500" => $color == "green",
                    "text-lav-orange-500" => $color == "orange",
                    "text-lav-red-500" => $color == "red",
                ])
            >
                Dash
            </span>
        </div>
    </div>
</header>
