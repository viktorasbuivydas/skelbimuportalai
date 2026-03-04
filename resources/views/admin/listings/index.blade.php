<x-layouts.app title="Skelbimų administravimas">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Skelbimų administravimas</h1>
        <p class="text-sm text-gray-500">Peržiūrėkite ir tvirtinkite vartotojų skelbimus</p>
    </div>

    <div class="mb-6 flex gap-2">
        @php
            $filters = [
                'pending' => 'Laukiantys',
                'approved' => 'Patvirtinti',
                'rejected' => 'Atmesti',
                'all' => 'Visi',
            ];
        @endphp
        @foreach($filters as $key => $label)
            <a
                href="{{ route('admin.listings.index', ['status' => $key]) }}"
                class="rounded-lg px-4 py-2 text-sm font-medium transition
                    {{ $status === $key
                        ? 'bg-green-600 text-white'
                        : 'bg-white text-gray-600 border border-gray-200 hover:bg-gray-50' }}"
            >
                {{ $label }}
            </a>
        @endforeach
    </div>

    <div class="rounded-xl border border-gray-200 bg-white">
        @if($listings->isEmpty())
            <div class="px-5 py-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                <p class="mt-2 text-sm text-gray-500">Nėra skelbimų su šia būsena.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="border-b border-gray-100 bg-gray-50 text-xs uppercase text-gray-500">
                        <tr>
                            <th class="px-5 py-3 font-medium">Pavadinimas</th>
                            <th class="px-5 py-3 font-medium">Autorius</th>
                            <th class="px-5 py-3 font-medium">Kaina</th>
                            <th class="px-5 py-3 font-medium">Vietovė</th>
                            <th class="px-5 py-3 font-medium">Būsena</th>
                            <th class="px-5 py-3 font-medium">Data</th>
                            <th class="px-5 py-3 font-medium text-right">Veiksmai</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($listings as $listing)
                            <tr class="hover:bg-gray-50">
                                <td class="max-w-xs truncate px-5 py-3 font-medium text-gray-900">{{ $listing->title }}</td>
                                <td class="px-5 py-3 text-gray-600">{{ $listing->user?->name ?? 'Sistema' }}</td>
                                <td class="px-5 py-3 text-gray-600">{{ number_format($listing->price, 2) }} &euro;</td>
                                <td class="px-5 py-3 text-gray-600">{{ $listing->location }}</td>
                                <td class="px-5 py-3">
                                    <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium
                                        @switch($listing->status->color())
                                            @case('green') bg-green-100 text-green-800 @break
                                            @case('yellow') bg-yellow-100 text-yellow-800 @break
                                            @case('red') bg-red-100 text-red-800 @break
                                            @default bg-gray-100 text-gray-800
                                        @endswitch
                                    ">
                                        {{ $listing->status->label() }}
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-gray-500">{{ $listing->created_at->format('Y-m-d H:i') }}</td>
                                <td class="px-5 py-3">
                                    <div class="flex items-center justify-end gap-2">
                                        @if($listing->status !== \App\Enums\ListingStatus::Approved)
                                            <form method="POST" action="{{ route('admin.listings.approve', $listing) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="rounded bg-green-100 px-3 py-1 text-xs font-medium text-green-700 transition hover:bg-green-200">
                                                    Patvirtinti
                                                </button>
                                            </form>
                                        @endif
                                        @if($listing->status !== \App\Enums\ListingStatus::Rejected)
                                            <form method="POST" action="{{ route('admin.listings.reject', $listing) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="rounded bg-red-100 px-3 py-1 text-xs font-medium text-red-700 transition hover:bg-red-200">
                                                    Atmesti
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($listings->hasPages())
                <div class="border-t border-gray-100 px-5 py-4">
                    {{ $listings->withQueryString()->links() }}
                </div>
            @endif
        @endif
    </div>
</x-layouts.app>
