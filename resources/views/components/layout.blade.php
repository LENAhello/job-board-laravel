<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
      
    </head>
    <body>
        
        <header>
            <nav class="bg-linear-to-bl from-slate-700 to-indigo-900">
                <ul class="flex px-5">
                    <x-nav-links :active="request()->is('job')" href="/job">Home</x-nav-links>
                    <x-nav-links :active="request()->is('about')" href="/about">About</x-nav-links>
                    <x-nav-links :active="request()->is('contact')" href="/contact">Contact</x-nav-links>
                    <x-nav-links :active="request()->is('blog')" href="/blog">Blog</x-nav-links>
                </ul>
            </nav>
        </header>
                 
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
