<x-layouts.app title="Valdymo skydelis">
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Valdymo skydelis</h1>
            <p class="text-sm text-gray-500">Sveiki, {{ auth()->user()->name }}!</p>
        </div>
        <a href="{{ route('dashboard.listings.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
            Naujas skelbimas
        </a>
    </div>

    <div class="mb-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <div class="rounded-xl border border-gray-200 bg-white p-5">
            <p class="text-sm font-medium text-gray-500">Visi skelbimai</p>
            <p class="mt-1 text-2xl font-bold text-gray-900">{{ $stats['total'] }}</p>
        </div>
        <div class="rounded-xl border border-yellow-200 bg-yellow-50 p-5">
            <p class="text-sm font-medium text-yellow-700">Laukia patvirtinimo</p>
            <p class="mt-1 text-2xl font-bold text-yellow-800">{{ $stats['pending'] }}</p>
        </div>
        <div class="rounded-xl border border-green-200 bg-green-50 p-5">
            <p class="text-sm font-medium text-green-700">Patvirtinti</p>
            <p class="mt-1 text-2xl font-bold text-green-800">{{ $stats['approved'] }}</p>
        </div>
        <div class="rounded-xl border border-red-200 bg-red-50 p-5">
            <p class="text-sm font-medium text-red-700">Atmesti</p>
            <p class="mt-1 text-2xl font-bold text-red-800">{{ $stats['rejected'] }}</p>
        </div>
    </div>

    @if(auth()->user()->isAdmin())
        <div class="mb-8 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <h3 class="text-sm font-semibold text-blue-800">Administratoriaus informacija</h3>
            <div class="mt-2 flex gap-6">
                <div>
                    <span class="text-sm text-blue-600">Viso skelbimų sistemoje:</span>
                    <span class="ml-1 font-bold text-blue-900">{{ $stats['total_listings'] }}</span>
                </div>
                <div>
                    <span class="text-sm text-blue-600">Laukia patvirtinimo:</span>
                    <span class="ml-1 font-bold text-blue-900">{{ $stats['total_pending'] }}</span>
                </div>
                <a href="{{ route('admin.listings.index') }}" class="ml-auto text-sm font-medium text-blue-700 hover:text-blue-900">
                    Eiti į administravimą &rarr;
                </a>
            </div>
        </div>
    @endif

    <div class="rounded-xl border border-gray-200 bg-white">
        <div class="flex items-center justify-between border-b border-gray-100 px-5 py-4">
            <h2 class="font-semibold text-gray-900">Naujausi skelbimai</h2>
            <a href="{{ route('dashboard.listings.index') }}" class="text-sm font-medium text-green-600 hover:text-green-800">Visi skelbimai &rarr;</a>
        </div>

        @if($recentListings->isEmpty())
            <div class="px-5 py-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                <p class="mt-2 text-sm text-gray-500">Dar neturite skelbimų.</p>
                <a href="{{ route('dashboard.listings.create') }}" class="mt-3 inline-flex items-center gap-1 text-sm font-medium text-green-600 hover:text-green-800">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Sukurti pirmą skelbimą
                </a>
            </div>
        @else
            <div class="divide-y divide-gray-100">
                @foreach($recentListings as $listing)
                    <div class="flex items-center justify-between px-5 py-3">
                        <div class="min-w-0 flex-1">
                            <p class="truncate text-sm font-medium text-gray-900">{{ $listing->title }}</p>
                            <p class="text-xs text-gray-500">{{ $listing->location }} &middot; {{ number_format($listing->price, 2) }} &euro;</p>
                        </div>
                        <span class="ml-4 inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium
                            @switch($listing->status->color())
                                @case('green') bg-green-100 text-green-800 @break
                                @case('yellow') bg-yellow-100 text-yellow-800 @break
                                @case('red') bg-red-100 text-red-800 @break
                                @default bg-gray-100 text-gray-800
                            @endswitch
                        ">
                            {{ $listing->status->label() }}
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.app>
