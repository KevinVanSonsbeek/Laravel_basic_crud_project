<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name') }} - @yield('title')</title>
    </head>
    <body>
        @yield('content')
        @yield('scripts')
    </body>
</html>
