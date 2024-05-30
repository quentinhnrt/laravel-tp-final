<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 - Not found</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @bukStyles
</head>
<body class="font-spacemono">
<div class="grid h-screen place-content-center bg-white px-4">
    <div class="text-center">
        <h1 class="text-9xl font-black text-gray-200">404</h1>

        <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uh-oh!</p>

        <p class="mt-4 text-gray-500">We can't find that page.</p>

        <a
            href="#"
            class="mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring"
        >
            Go Back Home
        </a>
    </div>
</div>
@bukScripts
</body>
</html>
