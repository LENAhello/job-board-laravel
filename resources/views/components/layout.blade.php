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
        
        <header>
            <nav class="bg-[#5B3751] shadow-md">
                <ul class="flex space-x-6 px-6 py-3">
                    <x-nav-links :active="request()->routeIs('jobs.index')" href="{{ route('jobs.index') }}">
                        All Jobs
                    </x-nav-links>
                    <x-nav-links :active="request()->is('myapplication')" href="/myapplication">
                        My Applications
                    </x-nav-links>
                    <x-nav-links :active="request()->routeIs('jobs.create')" href="{{ route('jobs.create') }}">
                        Create New Job
                    </x-nav-links>
                    <x-nav-links :active="request()->routeIs('jobs.manage')" href="{{ route('jobs.manage') }}">
                        Manage Jobs
                    </x-nav-links>
                </ul>
            </nav>
        </header>
                 
        <main class="w-[90%] mx-auto grid place-items-center">
            {{ $slot }}
        </main>
    </body>
</html>
