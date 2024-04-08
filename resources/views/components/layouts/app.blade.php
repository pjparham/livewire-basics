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
        <a wire:navigate href="/" @class(['current' => request()->is('/')]) >Todos</a>
        <a wire:navigate href="/counter"  @class(['current' => request()->is('counter')])>Counter</a>
        <a wire:navigate href="/show-posts"  @class(['current' => request()->is('show-posts')])>Posts</a>
        <a wire:navigate href="/create-post"  @class(['current' => request()->is('create-post')])>Create a Post</a>
    </nav>

        {{ $slot }}
    </body>
</html>
