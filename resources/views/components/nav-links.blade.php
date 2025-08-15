@props(['active' => false])

@php
    $currentPage = 'bg-slate-900/40 ';
    $default = 'hover:bg-indigo-300/20';
@endphp

<li><a class="nav-links {{ $active ? $currentPage : $default }}" {{ $attributes }}>{{ $slot }}</a></li>
