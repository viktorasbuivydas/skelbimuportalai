<x-layouts.app :title="$listing->title . ' - Darbas.lt'">

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <nav class="mb-6 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-red-600">Pradžia</a>
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
                            <img src="{{ $listing->meta('logo') }}" alt="{{ $listing->meta('company') }}" class="h-16 w-16 rounded-lg object-cover">
                        @endif
                        <div>
                            <h1 class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $listing->title }}</h1>
                            @if($listing->meta('company'))
                                <p class="mt-1 text-sm font-medium text-gray-600">{{ $listing->meta('company') }}</p>
                            @endif
                            <p class="mt-1 flex items-center gap-1 text-sm text-gray-500">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                                {{ $listing->location }}
                            </p>
                        </div>
                    </div>

                    {{-- Tags --}}
                    <div class="mt-4 flex flex-wrap gap-2">
                        @if($listing->meta('salary'))
                            <span class="rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700">{{ $listing->meta('salary') }}</span>
                        @endif
                        @if($listing->meta('job_type'))
                            <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">{{ $listing->meta('job_type') }}</span>
                        @endif
                        @if($listing->meta('work_mode'))
                            <span class="rounded-full bg-purple-50 px-3 py-1 text-xs font-semibold text-purple-700">{{ $listing->meta('work_mode') }}</span>
                        @endif
                        @if($listing->is_featured)
                            <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Rekomenduojamas</span>
                        @endif
                    </div>

                    {{-- Description --}}
                    @if($listing->description)
                        <div class="mt-6 border-t border-gray-100 pt-6">
                            <h2 class="text-lg font-semibold text-gray-900">Darbo aprašymas</h2>
                            <p class="mt-2 leading-relaxed text-gray-600">{{ $listing->description }}</p>
                        </div>
                    @endif

                    <div class="mt-4 text-xs text-gray-400">
                        Paskelbta: {{ $listing->published_at?->diffForHumans() }}
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="w-full shrink-0 lg:w-80">
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    @if($listing->meta('salary'))
                        <div class="text-2xl font-bold text-gray-900">{{ $listing->meta('salary') }}</div>
                        <p class="text-xs text-gray-500">Mėnesinis atlyginimas (neatskaičius mokesčių)</p>
                    @endif

                    <button class="mt-6 w-full rounded-lg bg-red-600 py-3 text-sm font-bold text-white transition hover:bg-red-700">
                        Kandidatuoti
                    </button>
                    <button class="mt-2 w-full rounded-lg border border-gray-200 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        Išsaugoti
                    </button>
                </div>

                @if($listing->meta('company'))
                    <div class="mt-4 rounded-lg border border-gray-200 bg-white p-6">
                        <h3 class="text-sm font-bold text-gray-900">Apie įmonę</h3>
                        <div class="mt-3 flex items-center gap-3">
                            @if($listing->meta('logo'))
                                <img src="{{ $listing->meta('logo') }}" alt="{{ $listing->meta('company') }}" class="h-10 w-10 rounded">
                            @endif
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $listing->meta('company') }}</div>
                                <div class="text-xs text-gray-500">{{ $listing->location }}</div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layouts.app>
