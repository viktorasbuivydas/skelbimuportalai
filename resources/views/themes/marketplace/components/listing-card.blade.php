@props([
    'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80',
    'title' => 'Prekė',
    'location' => 'Vilnius',
    'price' => 50,
    'postedAgo' => 'prieš 3 min.',
    'isNew' => false,
    'isFeatured' => false,
])

<a href="#" class="group block overflow-hidden rounded-lg border border-gray-200 bg-white transition hover:shadow-md">
    <div class="relative aspect-[4/3] overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="h-full w-full object-cover transition group-hover:scale-105" loading="lazy">
        @if($isFeatured)
            <span class="absolute left-2 top-2 rounded bg-amber-400 px-1.5 py-0.5 text-[10px] font-bold text-amber-900">TOP</span>
        @endif
    </div>
    <div class="p-3">
        <h3 class="line-clamp-2 text-sm font-medium text-gray-900 group-hover:text-green-700">{{ $title }}</h3>
        <div class="mt-1 text-xs text-gray-400">{{ $postedAgo }}</div>
        <div class="mt-2 text-base font-bold text-green-700">{{ $price }} &euro;</div>
    </div>
</a>
