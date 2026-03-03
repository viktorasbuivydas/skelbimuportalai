@props([
    'variant' => 'primary',
    'size' => 'md',
    'tag' => 'button',
    'href' => null,
])

@php
    $tag = $href ? 'a' : $tag;

    $base = 'inline-flex items-center gap-2 rounded-lg font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 cursor-pointer';

    $variants = [
        'primary' => 'bg-gradient-to-r from-teal-500 to-emerald-600 text-white shadow-sm hover:from-teal-600 hover:to-emerald-700 focus:ring-teal-500',
        'secondary' => 'bg-gray-100 text-gray-700 hover:bg-gray-200 focus:ring-gray-400',
        'ghost' => 'text-gray-700 hover:bg-gray-100 focus:ring-gray-400',
        'outline' => 'border-2 border-teal-500 text-teal-600 hover:bg-teal-50 focus:ring-teal-500',
        'white' => 'bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:ring-white',
    ];

    $sizes = [
        'xs' => 'px-3 py-1.5 text-xs',
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
        'xl' => 'px-8 py-4 text-lg',
    ];

    $classes = implode(' ', [$base, $variants[$variant] ?? $variants['primary'], $sizes[$size] ?? $sizes['md']]);
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => $classes]) }}
    @if($href) href="{{ $href }}" @endif
    @if($tag === 'button' && !$attributes->has('type')) type="button" @endif
>
    {{ $slot }}
</{{ $tag }}>
