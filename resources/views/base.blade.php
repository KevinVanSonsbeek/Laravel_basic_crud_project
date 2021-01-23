<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name') }} - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @yield('content')
        @stack('scripts')
    </body>
</html>
