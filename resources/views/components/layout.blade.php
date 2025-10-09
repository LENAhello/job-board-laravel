<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
      
    </head>
    <body>
        @auth
        <header>
            <nav class="bg-[#5B3751] shadow-md">
                <div class="flex justify-between px-6 py-3 items-center">
                    <div>
                        <x-nav-links :active="request()->routeIs('jobs.index')" href="{{ route('jobs.index') }}">
                            All Jobs
                        </x-nav-links>
                    </div>
                    <div class="flex gap-5 items-center">
                        <a href="{{ route('auth.profile') }}"
                            class="text-white underline hover:text-shadow-secondary hover:text-shadow-md/30">
                            {{ auth()->user()->name }}
                        </a>
                        <form action="{{ route('auth.logout')}}" method="POST">
                            @csrf
                            <button class="bg-white rounded-lg text-primary py-2 px-4 font-semibold cursor-pointer">logout</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        @endauth
        <main class="w-[90%] mx-auto grid place-items-center">
            {{ $slot }}
        </main>
    </body>
</html>
