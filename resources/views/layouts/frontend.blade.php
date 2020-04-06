<!doctype html>
<html lang="{{ app()->getLocale() }}" class="text-lg"
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.typekit.net/gvi7pva.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="h-screen antialiased leading-none bg-gray-200">
    <div id="app">
        @include('layouts.frontend.partials.header')
        @yield('content')
        @include('layouts.frontend.partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
