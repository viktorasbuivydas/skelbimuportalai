<x-layouts.app :title="$listing->title . ' - Skelbiu'">

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <nav class="mb-6 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-green-600">Pradžia</a>
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
                        <span class="rounded bg-green-100 px-2 py-0.5 text-xs font-bold text-green-700">NAUJAS</span>
                    @endif
                    <span class="text-xs text-gray-400">{{ $listing->published_at?->diffForHumans() }}</span>
                </div>

                {{-- Title --}}
                <h1 class="mt-3 text-2xl font-bold text-gray-900">{{ $listing->title }}</h1>

                {{-- Details --}}
                <div class="mt-4 flex flex-wrap gap-3">
                    @if($listing->meta('condition'))
                        <span class="rounded bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">Būklė: {{ $listing->meta('condition') }}</span>
                    @endif
                    @if($listing->meta('seller'))
                        <span class="rounded bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">{{ $listing->meta('seller') }}</span>
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

                    <button class="mt-6 w-full rounded-lg bg-green-600 py-3 text-sm font-bold text-white transition hover:bg-green-700">
                        Susisiekti su pardavėju
                    </button>
                    <button class="mt-2 w-full rounded-lg border border-gray-200 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                        Rodyti telefono numerį
                    </button>
                </div>

                @if($listing->meta('seller'))
                    <div class="mt-4 rounded-lg border border-gray-200 bg-white p-6">
                        <h3 class="text-sm font-bold text-gray-900">Pardavėjas</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $listing->meta('seller') }}</p>
                        <p class="mt-1 flex items-center gap-1 text-sm text-gray-500">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                            {{ $listing->location }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layouts.app>
