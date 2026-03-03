<section class="border-b border-gray-200 bg-white py-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="mb-3 text-sm font-semibold text-gray-800">Populiarios kryptys</h2>
        <div class="flex gap-3 overflow-x-auto pb-2" style="-webkit-overflow-scrolling: touch;">
            @foreach([
                ['img' => 'https://images.unsplash.com/photo-1596397249159-3e73e66e32ae?auto=format&fit=crop&w=300&q=80', 'title' => 'Palanga', 'count' => 180],
                ['img' => 'https://images.unsplash.com/photo-1565953554309-75e48e8fe3a7?auto=format&fit=crop&w=300&q=80', 'title' => 'Vilnius', 'count' => 250],
                ['img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=300&q=80', 'title' => 'Kaunas', 'count' => 120],
                ['img' => 'https://images.unsplash.com/photo-1499793983394-e58fc2093740?auto=format&fit=crop&w=300&q=80', 'title' => 'Neringa', 'count' => 90],
                ['img' => 'https://images.unsplash.com/photo-1567954970774-58d6aa6c50dc?auto=format&fit=crop&w=300&q=80', 'title' => 'Trakai', 'count' => 45],
                ['img' => 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=300&q=80', 'title' => 'Klaipėda', 'count' => 95],
                ['img' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=300&q=80', 'title' => 'Druskininkai', 'count' => 65],
                ['img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=300&q=80', 'title' => 'Birštonas', 'count' => 35],
            ] as $item)
                <a href="#" class="group shrink-0">
                    <div class="relative h-24 w-36 overflow-hidden rounded-lg">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="h-full w-full object-cover transition group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span class="absolute bottom-1.5 left-2 right-2 text-xs font-medium leading-tight text-white">{{ $item['title'] }} <span class="text-teal-200">({{ $item['count'] }})</span></span>
                    </div>
                </a>
            @endforeach
            <a href="#" class="flex shrink-0 items-center px-3 text-xs font-semibold text-teal-600 hover:underline">Visos vietos »</a>
        </div>
    </div>
</section>
