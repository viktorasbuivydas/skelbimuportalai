<div class="w-full rounded-lg border border-gray-200 bg-white shadow-sm" x-data="{ activeCategory: 'auto', moreOpen: false }">
    {{-- Category Tabs --}}
    <div class="flex overflow-x-auto border-b border-gray-200">
        <button @click="activeCategory = 'auto'; moreOpen = false" :class="activeCategory === 'auto' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Automobiliai</button>
        <button @click="activeCategory = 'moto'; moreOpen = false" :class="activeCategory === 'moto' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Moto</button>
        <button @click="activeCategory = 'commercial'; moreOpen = false" :class="activeCategory === 'commercial' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Krovininis</button>
        <button @click="activeCategory = 'parts'; moreOpen = false" :class="activeCategory === 'parts' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Dalys</button>
        <button @click="activeCategory = 'tires'; moreOpen = false" :class="activeCategory === 'tires' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Padangos, ratlankiai</button>
        <button @click="activeCategory = 'agri'; moreOpen = false" :class="activeCategory === 'agri' ? 'border-b-2 border-blue-600 text-blue-700 font-semibold' : 'text-gray-500 hover:text-gray-700'" class="whitespace-nowrap px-5 py-3 text-sm transition">Žemės ūkis</button>

        <div class="relative" @click.outside="moreOpen = false">
            <button @click="moreOpen = !moreOpen" :class="moreOpen || ['boats','trailers','specials'].includes(activeCategory) ? 'text-blue-700 font-semibold' : 'text-gray-400 hover:text-gray-600'" class="flex items-center gap-1 whitespace-nowrap px-5 py-3 text-sm transition">
                Daugiau
                <svg class="h-3.5 w-3.5 transition" :class="moreOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
            </button>
            <div x-show="moreOpen" x-transition.opacity class="absolute right-0 top-full z-20 mt-px min-w-44 rounded-b-lg border border-gray-200 bg-white py-1 shadow-lg">
                <button @click="activeCategory = 'boats'; moreOpen = false" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50">Laivai, kateriai</button>
                <button @click="activeCategory = 'trailers'; moreOpen = false" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50">Priekabos</button>
                <button @click="activeCategory = 'specials'; moreOpen = false" class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50">Spec. technika</button>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row">
        {{-- Filters --}}
        <form action="#" method="GET" class="flex-1 p-5">
            <div class="grid grid-cols-2 gap-x-5 gap-y-3">
                <div>
                    <label class="mb-1 block text-xs text-gray-500">Markė</label>
                    <select name="make" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                        <option value="">–</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Ford</option>
                        <option>Hyundai</option>
                        <option>Kia</option>
                        <option>Mercedes-Benz</option>
                        <option>Nissan</option>
                        <option>Opel</option>
                        <option>Peugeot</option>
                        <option>Renault</option>
                        <option>Škoda</option>
                        <option>Toyota</option>
                        <option>Volkswagen</option>
                        <option>Volvo</option>
                    </select>
                </div>

                <div>
                    <label class="mb-1 block text-xs text-gray-500">Modelis</label>
                    <select name="model" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                        <option value="">–</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label class="mb-1 block text-xs text-gray-500">Metai nuo</label>
                        <select name="year_from" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                            <option value="">–</option>
                            @for($y = date('Y'); $y >= 1990; $y--)
                                <option>{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                    <div>
                        <label class="mb-1 block text-xs text-gray-500">Metai iki</label>
                        <select name="year_to" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                            <option value="">–</option>
                            @for($y = date('Y'); $y >= 1990; $y--)
                                <option>{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label class="mb-1 block text-xs text-gray-500">Kaina nuo, €</label>
                        <select name="price_from" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                            <option value="">–</option>
                            <option>500</option>
                            <option>1 000</option>
                            <option>2 000</option>
                            <option>3 000</option>
                            <option>5 000</option>
                            <option>10 000</option>
                            <option>15 000</option>
                            <option>20 000</option>
                            <option>30 000</option>
                            <option>50 000</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-1 block text-xs text-gray-500">Kaina iki, €</label>
                        <select name="price_to" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                            <option value="">–</option>
                            <option>1 000</option>
                            <option>2 000</option>
                            <option>5 000</option>
                            <option>10 000</option>
                            <option>15 000</option>
                            <option>20 000</option>
                            <option>30 000</option>
                            <option>50 000</option>
                            <option>100 000</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="mb-1 block text-xs text-gray-500">Kuro tipas</label>
                    <select name="fuel" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                        <option value="">–</option>
                        <option>Dyzelinas</option>
                        <option>Benzinas</option>
                        <option>Elektra</option>
                        <option>Hibridas</option>
                        <option>Dujos (LPG)</option>
                    </select>
                </div>

                <div>
                    <label class="mb-1 block text-xs text-gray-500">Kėbulo tipas</label>
                    <select name="body" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-blue-500">
                        <option value="">–</option>
                        <option>Sedanas</option>
                        <option>Universalas</option>
                        <option>Hečbekas</option>
                        <option>Visureigis</option>
                        <option>Kupė</option>
                        <option>Kabrioletas</option>
                        <option>Pikapas</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <label class="mb-1 block text-xs text-gray-500">Tekstinė paieška</label>
                <div class="flex items-center gap-3">
                    <div class="flex flex-1 items-center gap-2 rounded border border-gray-300 px-3 py-2">
                        <svg class="h-4 w-4 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                        <input type="text" name="q" placeholder="–" class="w-full bg-transparent text-sm text-gray-700 outline-none placeholder-gray-400">
                    </div>
                    <a href="#" class="shrink-0 text-sm text-blue-600 underline underline-offset-2 hover:text-blue-700">Detali paieška</a>
                    <button type="submit" class="shrink-0 rounded bg-blue-600 px-8 py-2 text-sm font-bold text-white transition hover:bg-blue-700">Ieškoti</button>
                </div>
            </div>
        </form>

        {{-- Saved Searches --}}
        <div class="hidden border-l border-gray-200 bg-gray-50/60 p-5 lg:block lg:w-72">
            <div class="mb-3 flex items-center justify-between">
                <h3 class="text-sm font-semibold text-blue-700">Mano paieškos</h3>
                <span class="text-xs text-gray-400">Pranešti apie naujus</span>
            </div>

            <div class="space-y-2.5">
                <div x-data="{ notify: false }" class="flex items-center gap-3 rounded-lg bg-white px-3 py-2.5 shadow-sm">
                    <button class="shrink-0 text-gray-300 transition hover:text-red-400" aria-label="Pašalinti">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                    </button>
                    <div class="min-w-0 flex-1">
                        <div class="text-sm font-semibold text-gray-900">Audi A7</div>
                        <div class="truncate text-xs text-gray-400">Dyzelinas</div>
                    </div>
                    <span class="shrink-0 rounded bg-emerald-500 px-1.5 py-0.5 text-xs font-bold text-white">+7</span>
                    <button @click="notify = !notify" class="relative h-6 w-11 shrink-0 rounded-full transition-colors duration-200" :class="notify ? 'bg-blue-600' : 'bg-gray-300'" aria-label="Pranešimai">
                        <span class="absolute left-0.5 top-0.5 h-5 w-5 rounded-full bg-white shadow transition-transform duration-200" :class="notify ? 'translate-x-5' : 'translate-x-0'"></span>
                    </button>
                </div>

                <div x-data="{ notify: false }" class="flex items-center gap-3 rounded-lg bg-white px-3 py-2.5 shadow-sm">
                    <button class="shrink-0 text-gray-300 transition hover:text-red-400" aria-label="Pašalinti">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                    </button>
                    <div class="min-w-0 flex-1">
                        <div class="text-sm font-semibold text-gray-900">Volvo XC90</div>
                        <div class="truncate text-xs text-gray-400">nuo 2018 | nuo 10000 € | Rida n…</div>
                    </div>
                    <span class="shrink-0 rounded bg-emerald-500 px-1.5 py-0.5 text-xs font-bold text-white">+1</span>
                    <button @click="notify = !notify" class="relative h-6 w-11 shrink-0 rounded-full transition-colors duration-200" :class="notify ? 'bg-blue-600' : 'bg-gray-300'" aria-label="Pranešimai">
                        <span class="absolute left-0.5 top-0.5 h-5 w-5 rounded-full bg-white shadow transition-transform duration-200" :class="notify ? 'translate-x-5' : 'translate-x-0'"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
