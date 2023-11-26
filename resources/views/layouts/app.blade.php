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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="{{asset('css/lib/jquery.seat-charts.css')}}">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer>
            <script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>
            <script src="{{ asset('js/chart-script.js') }}"></script>
            <script src="{{ asset('js/lib/jquery-1.11.0.min.js') }}"></script>
            <script src="{{ asset('js/lib/jquery.seat-charts.js') }}"></script>
            <script src="{{ asset('js/lib/bootstrap.js') }}"></script>
            <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/lib/angular.min.js') }}"></script>
            <script src="{{ asset('js/booking.js') }}"></script>
            <script src="{{ asset('js/dashboard.js') }}"></script>
        </footer>
    </body>
</html>
