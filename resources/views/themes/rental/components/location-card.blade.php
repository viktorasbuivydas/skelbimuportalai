@props([
    'name' => 'Vilnius',
    'image' => 'https://images.unsplash.com/photo-1565953554309-75e48e8fe3a7?auto=format&fit=crop&w=600&q=80',
    'count' => 0,
    'href' => '#',
])

<a
    href="{{ $href }}"
    class="group relative block aspect-[3/4] overflow-hidden rounded-2xl sm:aspect-[4/5]"
>
    <img
        src="{{ $image }}"
        alt="{{ $name }}"
        class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
    <div class="absolute inset-x-0 bottom-0 p-5">
        <h3 class="text-xl font-bold text-white">{{ $name }}</h3>
        @if($count > 0)
            <p class="mt-1 text-sm text-gray-200">{{ $count }} {{ trans_choice('{1} skelbimas|[2,9] skelbimai|[10,*] skelbimų', $count) }}</p>
        @endif
    </div>
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-white/10 transition group-hover:ring-white/25"></div>
</a>
