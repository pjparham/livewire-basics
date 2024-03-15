<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('app.css') }}">
{{--        {{dd(asset('app.css'))}}--}}
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Livewire Basics' }}</title>
    </head>
    <body>
    <nav>
        <a href="/">Todos</a>
        <a href="/counter">Counters</a>
    </nav>

        {{ $slot }}
    </body>
</html>
