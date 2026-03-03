@props([
    'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600&q=80',
    'title' => 'Apartamentai',
    'location' => 'Vilnius',
    'price' => 50,
    'rooms' => 1,
    'guests' => 2,
    'type' => 'Apartamentai',
    'postedAgo' => 'prieš 2 val.',
    'isNew' => false,
    'isFeatured' => false,
])

<a href="#" class="group block overflow-hidden rounded-lg border border-gray-200 bg-white transition hover:shadow-md">
    <div class="relative aspect-[4/3] overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="h-full w-full object-cover transition group-hover:scale-105" loading="lazy">
        @if($isFeatured)
            <span class="absolute left-2 top-2 rounded bg-amber-400 px-1.5 py-0.5 text-[10px] font-bold text-amber-900">TOP</span>
        @endif
        @if($isNew)
            <span class="absolute left-2 {{ $isFeatured ? 'top-8' : 'top-2' }} rounded bg-emerald-500 px-1.5 py-0.5 text-[10px] font-bold text-white">NAUJAS</span>
        @endif
        <span class="absolute bottom-2 left-2 rounded bg-white/90 px-2 py-0.5 text-[10px] font-medium text-gray-700 backdrop-blur-sm">{{ $type }}</span>
    </div>
    <div class="p-3">
        <h3 class="line-clamp-2 text-sm font-medium text-gray-900 group-hover:text-teal-700">{{ $title }}</h3>
        <div class="mt-1 flex items-center gap-1 text-xs text-gray-400">
            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
            {{ $location }}
            <span>&middot;</span>
            <span>{{ $rooms }} kamb.</span>
            <span>&middot;</span>
            <span>{{ $guests }} asm.</span>
        </div>
        <div class="mt-1 text-xs text-gray-400">{{ $postedAgo }}</div>
        <div class="mt-2 text-base font-bold text-teal-700">{{ $price }} &euro; <span class="text-xs font-normal text-gray-400">/ naktį</span></div>
    </div>
</a>
