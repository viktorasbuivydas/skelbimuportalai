@props([
    'subtitle' => null,
    'centered' => false,
])

<div @class([
    'mb-10',
    'text-center' => $centered,
])>
    <h2 {{ $attributes->merge(['class' => 'text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl']) }}>
        {{ $slot }}
    </h2>
    @if($subtitle)
        <p class="mt-3 max-w-2xl text-base text-gray-500 sm:text-lg {{ $centered ? 'mx-auto' : '' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
