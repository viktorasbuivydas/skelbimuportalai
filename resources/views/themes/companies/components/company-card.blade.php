@props([
    'logo' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=200&q=80',
    'name' => 'Įmonė',
    'category' => 'Paslaugos',
    'location' => 'Vilnius',
    'rating' => 0,
    'reviewCount' => 0,
    'description' => '',
    'isVerified' => false,
    'isFeatured' => false,
])

<article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
    <div class="p-5">
        <div class="flex items-start gap-4">
            <div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-xl border border-gray-100">
                <img
                    src="{{ $logo }}"
                    alt="{{ $name }}"
                    class="h-full w-full object-cover"
                    loading="lazy"
                >
            </div>
            <div class="min-w-0 flex-1">
                <div class="flex flex-wrap items-center gap-2">
                    <h3 class="text-base font-semibold text-gray-900 transition group-hover:text-indigo-600">
                        {{ $name }}
                    </h3>
                    @if($isVerified)
                        <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-medium text-emerald-700">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            Patvirtinta
                        </span>
                    @endif
                    @if($isFeatured)
                        <span class="rounded-full bg-amber-50 px-2 py-0.5 text-xs font-medium text-amber-700">Rekomenduojama</span>
                    @endif
                </div>

                <span class="mt-1 inline-block rounded-full bg-indigo-50 px-2.5 py-0.5 text-xs font-medium text-indigo-700">{{ $category }}</span>

                <div class="mt-2 flex items-center gap-1.5 text-sm text-gray-500">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    {{ $location }}
                </div>
            </div>
        </div>

        @if($description)
            <p class="mt-3 line-clamp-2 text-sm leading-relaxed text-gray-500">{{ $description }}</p>
        @endif

        <div class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4">
            <div class="flex items-center gap-1.5">
                @if($rating > 0)
                    <div class="flex items-center gap-0.5">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="h-4 w-4 {{ $i <= round($rating) ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="text-sm font-medium text-gray-700">{{ number_format($rating, 1) }}</span>
                    <span class="text-sm text-gray-400">({{ $reviewCount }})</span>
                @else
                    <span class="text-sm text-gray-400">Dar nėra atsiliepimų</span>
                @endif
            </div>
            <x-button variant="ghost" size="xs" class="text-indigo-600 hover:text-indigo-700!">
                Plačiau
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </x-button>
        </div>
    </div>
</article>
