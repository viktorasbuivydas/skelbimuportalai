<x-layouts.app title="Redaguoti skelbimą">
    <div class="mb-6">
        <a href="{{ route('dashboard.listings.index') }}" class="text-sm text-gray-500 hover:text-gray-700">&larr; Grįžti į skelbimus</a>
        <h1 class="mt-2 text-2xl font-bold text-gray-900">Redaguoti skelbimą</h1>
    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-6">
        <form method="POST" action="{{ route('dashboard.listings.update', $listing) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="mb-1 block text-sm font-medium text-gray-700">Pavadinimas</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $listing->title) }}"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('title') border-red-400 @enderror"
                >
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="mb-1 block text-sm font-medium text-gray-700">Aprašymas</label>
                <textarea
                    id="description"
                    name="description"
                    rows="5"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('description') border-red-400 @enderror"
                >{{ old('description', $listing->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="price" class="mb-1 block text-sm font-medium text-gray-700">Kaina (&euro;)</label>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="{{ old('price', $listing->price) }}"
                        step="0.01"
                        min="0"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('price') border-red-400 @enderror"
                    >
                    @error('price')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="location" class="mb-1 block text-sm font-medium text-gray-700">Vietovė</label>
                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="{{ old('location', $listing->location) }}"
                        required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('location') border-red-400 @enderror"
                    >
                    @error('location')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="image" class="mb-1 block text-sm font-medium text-gray-700">Nuotraukos URL</label>
                <input
                    type="url"
                    id="image"
                    name="image"
                    value="{{ old('image', $listing->image) }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('image') border-red-400 @enderror"
                >
                @error('image')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            @if(!empty($metaFields))
                <div class="border-t border-gray-100 pt-5">
                    <h3 class="mb-4 text-sm font-semibold text-gray-900">Papildoma informacija</h3>
                    <div class="grid gap-5 sm:grid-cols-2">
                        @foreach($metaFields as $key => $field)
                            <div>
                                <label for="meta_{{ $key }}" class="mb-1 block text-sm font-medium text-gray-700">{{ $field['label'] }}</label>
                                @if($field['type'] === 'boolean')
                                    <select
                                        id="meta_{{ $key }}"
                                        name="meta[{{ $key }}]"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20"
                                    >
                                        <option value="">—</option>
                                        <option value="1" @selected(old("meta.{$key}", $metaValues[$key] ?? '') === '1')>Taip</option>
                                        <option value="0" @selected(old("meta.{$key}", $metaValues[$key] ?? '') === '0')>Ne</option>
                                    </select>
                                @else
                                    <input
                                        type="{{ $field['type'] === 'integer' ? 'number' : ($field['type'] === 'decimal' ? 'number' : 'text') }}"
                                        id="meta_{{ $key }}"
                                        name="meta[{{ $key }}]"
                                        value="{{ old("meta.{$key}", $metaValues[$key] ?? '') }}"
                                        @if($field['type'] === 'decimal') step="0.01" @endif
                                        @if(in_array($field['type'], ['integer', 'decimal'])) min="0" @endif
                                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error("meta.{$key}") border-red-400 @enderror"
                                    >
                                @endif
                                @error("meta.{$key}")
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="rounded-lg border border-yellow-200 bg-yellow-50 px-4 py-3">
                <p class="text-sm text-yellow-800">Redagavus skelbimą, jis bus pakartotinai pateiktas patvirtinimui.</p>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="rounded-lg bg-green-600 px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                    Išsaugoti pakeitimus
                </button>
                <a href="{{ route('dashboard.listings.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Atšaukti</a>
            </div>
        </form>
    </div>
</x-layouts.app>
