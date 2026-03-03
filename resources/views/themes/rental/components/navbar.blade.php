<nav class="sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="bg-teal-600">
        <div class="mx-auto flex max-w-7xl items-center gap-4 px-4 py-2.5 sm:px-6 lg:px-8">
            <a href="/" class="flex shrink-0 items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded bg-white/15">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                </div>
                <span class="text-lg font-bold text-white">Nakvynė.lt</span>
            </a>

            <form action="#" method="GET" class="hidden flex-1 md:flex">
                <div class="flex w-full items-center overflow-hidden rounded bg-white">
                    <select name="type" class="border-r border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 outline-none">
                        <option>Visi tipai</option>
                        <option>Apartamentai</option>
                        <option>Butai</option>
                        <option>Namai</option>
                        <option>Sodybos</option>
                        <option>Kambariai</option>
                    </select>
                    <input type="text" name="location" placeholder="Ieškokite pagal miestą, rajoną ar adresą" class="min-w-0 flex-1 px-3 py-2 text-sm text-gray-700 outline-none placeholder-gray-400">
                    <select name="guests" class="border-l border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 outline-none">
                        <option>Svečių sk.</option>
                        <option>1 svečias</option>
                        <option>2 svečiai</option>
                        <option>3 svečiai</option>
                        <option>4 svečiai</option>
                        <option>5+ svečiai</option>
                    </select>
                    <button type="submit" class="bg-teal-500 px-5 py-2 text-sm font-bold text-white transition hover:bg-teal-400">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                    </button>
                </div>
            </form>

            <div class="hidden items-center gap-1 md:flex">
                <a href="#" class="rounded p-2 text-teal-200 transition hover:bg-white/10 hover:text-white" aria-label="Mėgstami">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
                </a>
                <a href="#" class="rounded p-2 text-teal-200 transition hover:bg-white/10 hover:text-white" aria-label="Pranešimai">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" /></svg>
                </a>
            </div>

            <a href="#" class="hidden shrink-0 rounded bg-white px-4 py-1.5 text-sm font-bold text-teal-700 transition hover:bg-teal-50 md:inline-flex md:items-center md:gap-1.5">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                Įdėti skelbimą
            </a>

            <button class="inline-flex items-center justify-center rounded p-2 text-teal-200 transition hover:text-white md:hidden" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-b border-teal-700 bg-teal-600 md:hidden">
        <div class="px-4 py-3">
            <form action="#" method="GET" class="flex flex-col gap-2">
                <input type="text" name="location" placeholder="Miestas, rajonas ar adresas..." class="w-full rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none placeholder-gray-400">
                <div class="flex gap-2">
                    <select name="type" class="flex-1 rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none">
                        <option>Visi tipai</option>
                        <option>Apartamentai</option>
                        <option>Butai</option>
                        <option>Namai</option>
                    </select>
                    <select name="guests" class="flex-1 rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none">
                        <option>Svečių sk.</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4+</option>
                    </select>
                </div>
                <button type="submit" class="w-full rounded bg-teal-500 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-teal-400">Ieškoti</button>
            </form>
        </div>
        <div class="border-t border-teal-500 px-4 py-3">
            <a href="#" class="block w-full rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-teal-700">+ Įdėti skelbimą</a>
        </div>
    </div>
</nav>
