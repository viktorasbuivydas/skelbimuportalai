@props([
    'logo' => 'https://ui-avatars.com/api/?name=Company&background=e53e3e&color=fff&size=80',
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

<a href="#" class="group flex items-center gap-4 border-b border-gray-100 bg-white px-4 py-3 transition hover:bg-red-50/30 {{ $isFeatured ? 'border-l-4 border-l-red-500 bg-red-50/20' : '' }}">
    <div class="hidden h-12 w-12 shrink-0 overflow-hidden rounded border border-gray-200 sm:block">
        <img src="{{ $logo }}" alt="{{ $company }}" class="h-full w-full object-cover" loading="lazy">
    </div>

    <div class="min-w-0 flex-1">
        <div class="flex items-center gap-2">
            <h3 class="truncate text-sm font-semibold text-gray-900 group-hover:text-red-600">{{ $title }}</h3>
            @if($isNew)
                <span class="shrink-0 rounded bg-emerald-500 px-1.5 py-0.5 text-[10px] font-bold uppercase text-white">Naujas</span>
            @endif
            @if($isUrgent)
                <span class="shrink-0 rounded bg-red-500 px-1.5 py-0.5 text-[10px] font-bold uppercase text-white">Skubus</span>
            @endif
        </div>
        <div class="mt-0.5 flex flex-wrap items-center gap-x-3 text-xs text-gray-500">
            <span class="font-medium text-gray-700">{{ $company }}</span>
            <span>{{ $location }}</span>
            <span>{{ $type }}</span>
        </div>
    </div>

    <div class="hidden shrink-0 text-right sm:block">
        <div class="text-sm font-bold text-red-600">{{ $salary }}</div>
        <div class="mt-0.5 text-xs text-gray-400">{{ $postedDate }}</div>
    </div>
</a>
