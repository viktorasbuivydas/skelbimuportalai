<x-layouts.app :title="$listing->title . ' - Įmonės.lt'">

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <nav class="mb-6 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-indigo-600">Pradžia</a>
            <span class="mx-1">›</span>
            <span class="text-gray-900">{{ $listing->title }}</span>
        </nav>

        <div class="flex flex-col gap-8 lg:flex-row">
            {{-- Main content --}}
            <div class="min-w-0 flex-1">
                <div class="rounded-lg border border-gray-200 bg-white p-6 sm:p-8">
                    {{-- Company header --}}
                    <div class="flex items-start gap-4">
                        @if($listing->meta('logo'))
                            <img src="{{ $listing->meta('logo') }}" alt="{{ $listing->title }}" class="h-20 w-20 rounded-lg object-cover">
                        @endif
                        <div>
                            <div class="flex items-center gap-2">
                                <h1 class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $listing->title }}</h1>
                                @if($listing->meta('is_verified') === '1')
                                    <svg class="h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" /></svg>
                                @endif
                            </div>
                            @if($listing->meta('category'))
                                <p class="mt-1 text-sm text-gray-600">{{ $listing->meta('category') }}</p>
                            @endif
                            <p class="mt-1 flex items-center gap-1 text-sm text-gray-500">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                                {{ $listing->location }}
                            </p>

                            {{-- Rating --}}
                            @if($listing->meta('rating'))
                                <div class="mt-2 flex items-center gap-2">
                                    <div class="flex items-center gap-0.5">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="h-4 w-4 {{ $i <= round((float) $listing->meta('rating')) ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                                        @endfor
                                    </div>
                                    <span class="text-sm font-semibold text-gray-900">{{ $listing->meta('rating') }}</span>
                                    @if($listing->meta('review_count'))
                                        <span class="text-sm text-gray-500">({{ $listing->meta('review_count') }} atsiliepimai)</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Description --}}
                    @if($listing->description)
                        <div class="mt-6 border-t border-gray-100 pt-6">
                            <h2 class="text-lg font-semibold text-gray-900">Apie įmonę</h2>
                            <p class="mt-2 leading-relaxed text-gray-600">{{ $listing->description }}</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="w-full shrink-0 lg:w-80">
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    <h3 class="text-sm font-bold text-gray-900">Kontaktai</h3>
                    <button class="mt-4 w-full rounded-lg bg-indigo-600 py-3 text-sm font-bold text-white transition hover:bg-indigo-700">
                        Susisiekti
                    </button>
                    <button class="mt-2 w-full rounded-lg border border-gray-200 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        Rodyti telefono numerį
                    </button>
                </div>

                <div class="mt-4 rounded-lg border border-gray-200 bg-white p-6">
                    <h3 class="text-sm font-bold text-gray-900">Informacija</h3>
                    <div class="mt-3 space-y-2">
                        @if($listing->meta('category'))
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">Kategorija</span>
                                <span class="font-medium text-gray-900">{{ $listing->meta('category') }}</span>
                            </div>
                        @endif
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Registruota</span>
                            <span class="font-medium text-gray-900">{{ $listing->published_at?->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
