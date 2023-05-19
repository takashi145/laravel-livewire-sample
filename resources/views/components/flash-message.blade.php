@props(['duration' => 3000])

@php
    $type = session('flashMessage.type');

    $classes = [
        'success' => 'bg-green-500',
        'error' => 'bg-red-500',
    ];
@endphp

@if (session()->has('flashMessage.message'))
<div x-data="{show: false}"
    x-init="setTimeout(() => { show = true; }, 100); setTimeout(() => { show = false; }, {{ $duration }})"
    x-show="show"
    x-on:click="show = false"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    x-cloak
    class="fixed z-50 top-12 right-3 max-w-full text-white px-4 py-2 rounded shadow-md hover:cursor-pointer {{ $classes[$type] }}">
    <div>{{ session('flashMessage.message') }}</div>
</div>
@endif
