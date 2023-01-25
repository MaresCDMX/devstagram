<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-50">
    <header class="p-5 border-b bg-white shadow-md">

        <div class="w-full text-gray-700 bg-white ">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <a href="https://www.flaticon.es/icono-gratis/avion_9515910?term=instagram&page=1&position=5&origin=tag&related_id=9515910"></a>
                    <a href="/"
                        class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">Devstagram</a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/login">Login</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/registro">Registro</a>

                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto mb-60">
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-blue-900 md:text-5xl lg:text-6xl text-center mt-10">
            @yield('titulo')</h1>
        <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 phone:grid-cols-2 tablet:grid-cols-2 laptop:grid-cols-3 desktop:grid-cols-4">@yield('content')</p>
    </main>

    <footer class="p-5 border-t bg-white shadow-md">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="flex items-center justify-center">
                    <a href="/"
                        class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">Devstagram</a>
                </div>
                <p class="text-center sm:text-left text-gray-600 md:mt-0"> Devstagram. All rights reserved {{now()->year}} .</p>
            </div>
        </div>
    </footer>

</body>

</html>
