<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->

        <!-- Scripts -->
        <title>@yield('name')</title>
    </head>
    <body class="font-sans antialiased">
        @include('partials.navbar')
        <main >
            @yield('contain')
        </main>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>

