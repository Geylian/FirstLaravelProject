<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{assets('css/app.css')}}">
        <title>{{ config('app.name', 'FirstLaravelApp') }}</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>
