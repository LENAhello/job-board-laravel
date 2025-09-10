@props(['active' => false])

@php
    $current = 'bg-[#CEABB0]/50 text-white';
    $default = 'text-white hover:bg-[#CEABB0]/50 transition duration-200';
@endphp

<a class="rounded-md px-3 py-2 font-medium {{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>