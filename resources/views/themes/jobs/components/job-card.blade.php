@props([
    'logo' => 'https://ui-avatars.com/api/?name=Company&background=f97316&color=fff&size=80',
    'title' => 'Darbo pozicija',
    'company' => 'Įmonė',
    'location' => 'Vilnius',
    'salary' => '1500-2500 €',
    'type' => 'Nuolatinis',
    'isNew' => false,
    'isFeatured' => false,
    'isUrgent' => false,
    'postedDate' => 'Šiandien',
])

<article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
    <div class="p-5">
        <div class="flex items-start gap-4">
            <div class="h-14 w-14 shrink-0 overflow-hidden rounded-xl border border-gray-100">
                <img
                    src="{{ $logo }}"
                    alt="{{ $company }}"
                    class="h-full w-full object-cover"
                    loading="lazy"
                >
            </div>

            <div class="min-w-0 flex-1">
                <div class="flex flex-wrap gap-2">
                    @if($isNew)
                        <span class="rounded-full bg-emerald-500 px-3 py-0.5 text-xs font-semibold text-white">Naujas</span>
                    @endif
                    @if($isFeatured)
                        <span class="rounded-full bg-amber-500 px-3 py-0.5 text-xs font-semibold text-white">Rekomenduojamas</span>
                    @endif
                    @if($isUrgent)
                        <span class="rounded-full bg-red-500 px-3 py-0.5 text-xs font-semibold text-white">Skubus</span>
                    @endif
                </div>

                <h3 class="mt-2 text-base font-semibold text-gray-900 transition group-hover:text-orange-600">
                    {{ $title }}
                </h3>

                <p class="mt-1 text-sm font-medium text-gray-600">{{ $company }}</p>
            </div>
        </div>

        <div class="mt-4 flex flex-wrap items-center gap-3 text-sm text-gray-500">
            <span class="flex items-center gap-1">
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                {{ $location }}
            </span>
            <span class="flex items-center gap-1">
                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
                {{ $type }}
            </span>
        </div>

        <div class="mt-4 flex items-center justify-between border-t border-gray-100 pt-4">
            <div>
                <span class="text-lg font-bold text-orange-600">{{ $salary }}</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-xs text-gray-400">{{ $postedDate }}</span>
                <x-button variant="ghost" size="xs" class="text-orange-600 hover:text-orange-700!">
                    Plačiau
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
</article>
