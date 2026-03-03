<section class="border-b border-gray-200 bg-white py-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="mb-3 text-sm font-semibold text-gray-800">Jus gali sudominti</h2>
        <div class="flex gap-3 overflow-x-auto pb-2" style="-webkit-overflow-scrolling: touch;">
            @foreach([
                ['img' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=300&q=80', 'title' => 'Krovininiai automobiliai'],
                ['img' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=300&q=80', 'title' => 'Traktoriai, technika'],
                ['img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?auto=format&fit=crop&w=300&q=80', 'title' => 'Dviračiai, paspirtukai'],
                ['img' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=300&q=80', 'title' => 'Baldai'],
                ['img' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=300&q=80', 'title' => 'Kompiuteriai'],
                ['img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=300&q=80', 'title' => 'Aksesuarai'],
                ['img' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=300&q=80', 'title' => 'Interjeras, namai'],
                ['img' => 'https://images.unsplash.com/photo-1556906781-9a412961c28c?auto=format&fit=crop&w=300&q=80', 'title' => 'Sporto prekės'],
            ] as $item)
                <a href="#" class="group shrink-0">
                    <div class="relative h-24 w-36 overflow-hidden rounded-lg">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="h-full w-full object-cover transition group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span class="absolute bottom-1.5 left-2 right-2 text-xs font-medium leading-tight text-white">{{ $item['title'] }}</span>
                    </div>
                </a>
            @endforeach
            <a href="#" class="flex shrink-0 items-center px-3 text-xs font-semibold text-green-600 hover:underline">Žiūrėti daugiau »</a>
        </div>
    </div>
</section>
