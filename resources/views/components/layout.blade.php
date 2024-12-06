<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Airdrumming</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')
        <style>
            body {
                height: 100vh;
                min-height: 100vh;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-nav></x-nav>
        <main class="w-full h-full min-h-screen">
            {{$slot}}
            <x-footer></x-footer>
        </main>
    </body>
</html>
