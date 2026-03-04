<x-layouts.app title="Mano skelbimai">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Mano skelbimai</h1>
        <a href="{{ route('dashboard.listings.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
            Naujas skelbimas
        </a>
    </div>

    <div class="rounded-xl border border-gray-200 bg-white">
        @if($listings->isEmpty())
            <div class="px-5 py-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                <p class="mt-2 text-sm text-gray-500">Neturite skelbimų.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="border-b border-gray-100 bg-gray-50 text-xs uppercase text-gray-500">
                        <tr>
                            <th class="px-5 py-3 font-medium">Pavadinimas</th>
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
                                <td class="px-5 py-3 text-gray-500">{{ $listing->created_at->format('Y-m-d') }}</td>
                                <td class="px-5 py-3 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('dashboard.listings.edit', $listing) }}" class="text-sm font-medium text-green-600 hover:text-green-800">Redaguoti</a>
                                        <form method="POST" action="{{ route('dashboard.listings.destroy', $listing) }}" onsubmit="return confirm('Ar tikrai norite ištrinti šį skelbimą?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800">Ištrinti</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($listings->hasPages())
                <div class="border-t border-gray-100 px-5 py-4">
                    {{ $listings->links() }}
                </div>
            @endif
        @endif
    </div>
</x-layouts.app>
