@props([
    'image' => 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=600&q=80',
    'title' => 'Automobilis',
    'location' => 'Vilnius',
    'price' => 0,
    'year' => 2020,
    'fuel' => 'Dyzelinas',
    'mileage' => 0,
    'transmission' => 'Automatinė',
    'badge' => null,
    'isNew' => false,
    'isFeatured' => false,
])

<article class="group overflow-hidden rounded-lg border border-gray-200 bg-white transition hover:shadow-md">
    <a href="#" class="block">
        <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                loading="lazy"
            >

            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent px-3 pb-2.5 pt-6">
                <span class="text-lg font-bold text-white drop-shadow-sm">{{ number_format($price, 0, ',', ' ') }} &euro;</span>
            </div>

            <div class="absolute left-2 top-2 flex flex-wrap gap-1.5">
                @if($year)
                    <span class="rounded bg-blue-600 px-2 py-0.5 text-xs font-bold text-white shadow">{{ $year }}</span>
                @endif
                @if($isFeatured)
                    <span class="rounded bg-amber-500 px-2 py-0.5 text-xs font-bold text-white shadow">TOP</span>
                @endif
                @if($isNew)
                    <span class="rounded bg-emerald-500 px-2 py-0.5 text-xs font-bold text-white shadow">Naujas</span>
                @endif
                @if($badge)
                    <span class="rounded bg-red-500 px-2 py-0.5 text-xs font-bold text-white shadow">{{ $badge }}</span>
                @endif
            </div>
        </div>

        <div class="px-3 py-2.5">
            <h3 class="truncate text-sm font-semibold text-gray-900 group-hover:text-blue-600">{{ $title }}</h3>
            <div class="mt-1.5 flex flex-wrap items-center gap-x-3 gap-y-0.5 text-xs text-gray-500">
                <span>{{ $fuel }}</span>
                <span class="text-gray-300">|</span>
                <span>{{ number_format($mileage, 0, ',', ' ') }} km</span>
                <span class="text-gray-300">|</span>
                <span>{{ $transmission }}</span>
            </div>
            <div class="mt-1.5 flex items-center gap-1 text-xs text-gray-400">
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                {{ $location }}
            </div>
        </div>
    </a>
</article>
