@props([
    'title' => 'Nakvynės paieška Lietuvoje',
    'backgroundImage' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=1920&q=80',
])

<section class="relative overflow-hidden bg-gray-900">
    <div class="absolute inset-0">
        <img
            src="{{ $backgroundImage }}"
            alt=""
            class="h-full w-full object-cover"
            loading="eager"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900/70 via-gray-900/50 to-gray-900/30"></div>
    </div>

    <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl lg:text-4xl">
            {{ $title }}
        </h1>
        <div class="mt-5 max-w-3xl">
            <x-search-bar />
        </div>
    </div>
</section>
