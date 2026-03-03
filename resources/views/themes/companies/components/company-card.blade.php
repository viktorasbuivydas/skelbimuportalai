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

<a href="#" class="group block overflow-hidden rounded-lg border border-gray-200 bg-white transition hover:border-indigo-300 hover:shadow-md">
    <div class="p-4">
        <div class="flex items-start gap-3">
            <div class="relative h-12 w-12 shrink-0 overflow-hidden rounded border border-gray-100">
                <img src="{{ $logo }}" alt="{{ $name }}" class="h-full w-full object-cover" loading="lazy">
            </div>
            <div class="min-w-0 flex-1">
                <div class="flex items-center gap-1.5">
                    <h3 class="truncate text-sm font-semibold text-gray-900 group-hover:text-indigo-600">{{ $name }}</h3>
                    @if($isVerified)
                        <svg class="h-4 w-4 shrink-0 text-emerald-500" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" /></svg>
                    @endif
                    @if($isFeatured)
                        <svg class="h-4 w-4 shrink-0 text-amber-500" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                    @endif
                </div>
                <div class="mt-0.5 flex items-center gap-2 text-xs text-gray-500">
                    <span class="font-medium text-indigo-600">{{ $category }}</span>
                    <span>&middot;</span>
                    <span>{{ $location }}</span>
                </div>
            </div>
        </div>
        @if($rating > 0)
            <div class="mt-3 flex items-center gap-1.5 border-t border-gray-100 pt-3">
                <div class="flex items-center gap-0.5">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="h-3.5 w-3.5 {{ $i <= round($rating) ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                    @endfor
                </div>
                <span class="text-xs font-medium text-gray-700">{{ number_format($rating, 1) }}</span>
                <span class="text-xs text-gray-400">({{ $reviewCount }})</span>
            </div>
        @endif
    </div>
</a>
