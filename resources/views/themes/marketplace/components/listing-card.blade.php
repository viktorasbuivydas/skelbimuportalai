@props([
    'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80',
    'title' => 'Prekė',
    'location' => 'Vilnius',
    'price' => 50,
    'condition' => 'Naudotas',
    'category' => 'Kita',
    'isNew' => false,
    'isFeatured' => false,
    'sellerName' => 'Pardavėjas',
])

<article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
    <div class="relative aspect-[4/3] overflow-hidden">
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
            loading="lazy"
        >

        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 transition-opacity group-hover:opacity-100"></div>

        <div class="absolute left-3 top-3 flex flex-wrap gap-2">
            @if($isNew)
                <span class="rounded-full bg-emerald-500 px-3 py-1 text-xs font-semibold text-white shadow-sm">Naujas</span>
            @endif
            @if($isFeatured)
                <span class="rounded-full bg-amber-500 px-3 py-1 text-xs font-semibold text-white shadow-sm">Rekomenduojamas</span>
            @endif
        </div>

        <div class="absolute right-3 top-3">
            <button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-600 shadow-sm backdrop-blur-sm transition hover:bg-white hover:text-red-500" aria-label="Pridėti į mėgstamiausius">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </button>
        </div>

        <div class="absolute bottom-3 left-3">
            <span class="rounded-full bg-white/95 px-3 py-1 text-xs font-medium text-gray-700 shadow-sm backdrop-blur-sm">{{ $condition }}</span>
        </div>
    </div>

    <div class="p-4">
        <div class="mb-2 flex items-center gap-1.5 text-sm text-gray-500">
            <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            {{ $location }}
        </div>

        <h3 class="line-clamp-2 text-base font-semibold text-gray-900 transition group-hover:text-rose-600">
            {{ $title }}
        </h3>

        <div class="mt-2 text-xs text-gray-400">
            {{ $sellerName }}
        </div>

        <div class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4">
            <div>
                <span class="text-lg font-bold text-rose-600">{{ $price }} &euro;</span>
            </div>
            <x-button variant="ghost" size="xs" class="text-rose-600 hover:text-rose-700!">
                Plačiau
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </x-button>
        </div>
    </div>
</article>
