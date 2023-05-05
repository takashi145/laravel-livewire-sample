<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col items-center pt-20 bg-gray-100 dark:bg-gray-900">
            <a href="/" class="text-white mb-6 text-3xl">
                <x-application-logo />
            </a>
            <div class="w-full max-w-md px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-lg">
                @yield('content')

                @livewireScripts
            </div>
        </div>
    </body>
</html>
