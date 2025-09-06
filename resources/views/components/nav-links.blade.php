@props(['active' => false])

@php
    $current = 'bg-[#CEABB0] text-[#5B3751]';
    $default = 'text-[#E0E2DD] hover:bg-[#CEABB0] hover:text-[#5B3751] transition duration-200';
@endphp

<a class="rounded-md px-3 py-2 font-medium {{ $active ? $current : $default }}" {{ $attributes }}>
    {{ $slot }}
</a>