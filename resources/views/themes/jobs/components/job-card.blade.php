@props([
    'logo' => 'https://ui-avatars.com/api/?name=Company&background=e53e3e&color=fff&size=80',
    'title' => 'Darbo pozicija',
    'company' => 'Įmonė',
    'location' => 'Vilnius',
    'salary' => '1500-2500 €',
    'type' => 'Nuolatinis',
    'workMode' => null,
    'isNew' => false,
    'isFeatured' => false,
    'isUrgent' => false,
    'postedDate' => 'Šiandien',
])

<div class="group relative border-b border-gray-100 bg-white transition hover:bg-red-50/20 {{ $isFeatured ? 'border-l-4 border-l-red-500 bg-amber-50/30' : '' }}">
    <a href="#" class="flex flex-col gap-2 px-4 py-3 sm:flex-row sm:items-center sm:gap-4">
        <div class="flex items-center gap-3 sm:contents">
            <div class="h-11 w-11 shrink-0 overflow-hidden rounded border border-gray-200 sm:h-12 sm:w-12">
                <img src="{{ $logo }}" alt="{{ $company }}" class="h-full w-full object-cover" loading="lazy">
            </div>

            <div class="min-w-0 flex-1 sm:hidden">
                <h3 class="truncate text-sm font-semibold text-gray-900 group-hover:text-red-600">{{ $title }}</h3>
                <div class="text-xs text-gray-500">{{ $company }}</div>
            </div>
        </div>

        <div class="hidden min-w-0 flex-1 sm:block">
            <div class="flex items-center gap-2">
                @if($isFeatured)
                    <svg class="h-4 w-4 shrink-0 text-amber-500" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                @endif
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
                <span class="flex items-center gap-1">
                    <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                    {{ $location }}
                </span>
                <span>{{ $type }}</span>
                @if($workMode)
                    <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-0.5 text-[10px] font-semibold text-blue-700">
                        @if($workMode === 'Nuotolinis')
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                        @elseif($workMode === 'Hibridinis')
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" /></svg>
                        @endif
                        {{ $workMode }}
                    </span>
                @endif
            </div>
        </div>

        <div class="flex items-center justify-between sm:shrink-0 sm:flex-col sm:items-end sm:justify-center">
            <div class="text-sm font-bold text-red-600">{{ $salary }}</div>
            <div class="text-xs text-gray-400 sm:mt-0.5">{{ $postedDate }}</div>
        </div>

        <div class="flex items-center gap-2 sm:hidden">
            @if($isNew)
                <span class="rounded bg-emerald-500 px-1.5 py-0.5 text-[10px] font-bold uppercase text-white">Naujas</span>
            @endif
            @if($isUrgent)
                <span class="rounded bg-red-500 px-1.5 py-0.5 text-[10px] font-bold uppercase text-white">Skubus</span>
            @endif
            @if($workMode)
                <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-0.5 text-[10px] font-semibold text-blue-700">{{ $workMode }}</span>
            @endif
        </div>
    </a>

    <button
        class="absolute right-3 top-3 rounded-full p-1.5 text-gray-300 transition hover:bg-gray-100 hover:text-red-500 sm:opacity-0 sm:group-hover:opacity-100"
        aria-label="Išsaugoti"
        @click.prevent
        x-data="{ saved: false }"
        @click="saved = !saved"
        :class="saved ? 'text-red-500!' : ''"
    >
        <svg class="h-5 w-5" :fill="saved ? 'currentColor' : 'none'" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
    </button>
</div>
