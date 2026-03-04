<x-layouts.app :title="$listing->title . ' - NT Portalas'">

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <nav class="mb-6 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-emerald-600">Pradžia</a>
            <span class="mx-1">›</span>
            <span class="text-gray-900">{{ $listing->title }}</span>
        </nav>

        <div class="flex flex-col gap-8 lg:flex-row">
            {{-- Main content --}}
            <div class="min-w-0 flex-1">
                {{-- Image --}}
                <div class="overflow-hidden rounded-lg">
                    @if($listing->image)
                        <img src="{{ $listing->image }}" alt="{{ $listing->title }}" class="h-72 w-full object-cover sm:h-96">
                    @else
                        <div class="flex h-72 items-center justify-center bg-gray-200 sm:h-96">
                            <svg class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z" /></svg>
                        </div>
                    @endif
                </div>

                {{-- Badges --}}
                <div class="mt-4 flex items-center gap-2">
                    @if($listing->is_featured)
                        <span class="rounded bg-amber-100 px-2 py-0.5 text-xs font-bold text-amber-700">TOP</span>
                    @endif
                    @if($listing->is_new)
                        <span class="rounded bg-emerald-100 px-2 py-0.5 text-xs font-bold text-emerald-700">NAUJAS</span>
                    @endif
                    <span class="text-xs text-gray-400">{{ $listing->published_at?->diffForHumans() }}</span>
                </div>

                {{-- Title --}}
                <h1 class="mt-3 text-2xl font-bold text-gray-900">{{ $listing->title }}</h1>
                <p class="mt-1 flex items-center gap-1 text-sm text-gray-500">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                    {{ $listing->location }}
                </p>

                {{-- Property specs grid --}}
                <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3">
                    @if($listing->meta('property_type'))
                        <div class="rounded-lg border border-gray-200 bg-white p-3 text-center">
                            <div class="text-xs text-gray-500">Tipas</div>
                            <div class="mt-1 text-sm font-bold text-gray-900">{{ $listing->meta('property_type') }}</div>
                        </div>
                    @endif
                    @if($listing->meta('area') && $listing->meta('area') !== '0')
                        <div class="rounded-lg border border-gray-200 bg-white p-3 text-center">
                            <div class="text-xs text-gray-500">Plotas</div>
                            <div class="mt-1 text-sm font-bold text-gray-900">{{ $listing->meta('area') }} m²</div>
                        </div>
                    @endif
                    @if($listing->meta('rooms') && $listing->meta('rooms') !== '0')
                        <div class="rounded-lg border border-gray-200 bg-white p-3 text-center">
                            <div class="text-xs text-gray-500">Kambariai</div>
                            <div class="mt-1 text-sm font-bold text-gray-900">{{ $listing->meta('rooms') }}</div>
                        </div>
                    @endif
                    @if($listing->meta('floor') && $listing->meta('floor') !== '0')
                        <div class="rounded-lg border border-gray-200 bg-white p-3 text-center">
                            <div class="text-xs text-gray-500">Aukštas</div>
                            <div class="mt-1 text-sm font-bold text-gray-900">
                                {{ $listing->meta('floor') }}
                                @if($listing->meta('total_floors') && $listing->meta('total_floors') !== '0')
                                    / {{ $listing->meta('total_floors') }}
                                @endif
                            </div>
                        </div>
                    @endif
                    @if($listing->meta('heating') && $listing->meta('heating') !== 'Nėra')
                        <div class="rounded-lg border border-gray-200 bg-white p-3 text-center">
                            <div class="text-xs text-gray-500">Šildymas</div>
                            <div class="mt-1 text-sm font-bold text-gray-900">{{ $listing->meta('heating') }}</div>
                        </div>
                    @endif
                </div>

                {{-- Description --}}
                @if($listing->description)
                    <div class="mt-6">
                        <h2 class="text-lg font-semibold text-gray-900">Aprašymas</h2>
                        <p class="mt-2 leading-relaxed text-gray-600">{{ $listing->description }}</p>
                    </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="w-full shrink-0 lg:w-80">
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    <div class="text-3xl font-bold text-gray-900">
                        {{ number_format($listing->price, 0, ',', ' ') }} €
                    </div>
                    @if($listing->meta('area') && $listing->meta('area') !== '0')
                        <p class="mt-1 text-sm text-gray-500">
                            {{ number_format($listing->price / (int) $listing->meta('area'), 0, ',', ' ') }} €/m²
                        </p>
                    @endif

                    <button class="mt-6 w-full rounded-lg bg-emerald-600 py-3 text-sm font-bold text-white transition hover:bg-emerald-700">
                        Susisiekti
                    </button>
                    <button class="mt-2 w-full rounded-lg border border-gray-200 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        Rodyti telefono numerį
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
