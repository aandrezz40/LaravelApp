<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>@yield('name')</title>
    </head>
    <body class="font-sans antialiased h-full flex flex-col">
        @include('partials.navbar')

        <main class="flex flex-1 flex-col">
            @yield('contain')
            @yield('carrusel')  
        </main>

        <footer class="">
            @yield('footer')
        </footer>
    </body>
</html>
