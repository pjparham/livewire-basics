<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('app.css') }}">
{{--        {{dd(asset('app.css'))}}--}}
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/@alpinejs/ui@3.13.1-beta.0/dist/cdn.min.js"></script>
        <title>{{ $title ?? 'Livewire Basics' }}</title>
    </head>
    <body>
    <main class="flex justify-center items-center bg-slate-200 min-h-screen text-slate-800">
        {{ $slot }}
    </main>
{{--    <nav>--}}
{{--        <a wire:navigate href="/" @class(['current' => request()->is('/')]) >Todos</a>--}}
{{--        <a wire:navigate href="/counter"  @class(['current' => request()->is('counter')])>Counter</a>--}}
{{--        <a wire:navigate href="/show-posts"  @class(['current' => request()->is('show-posts')])>Posts</a>--}}
{{--        <a wire:navigate href="/create-post"  @class(['current' => request()->is('create-post')])>Create a Post</a>--}}
{{--    </nav>--}}


    </body>
</html>
