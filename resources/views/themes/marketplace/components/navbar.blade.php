<nav class="sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="bg-green-600">
        <div class="mx-auto flex max-w-7xl items-center gap-4 px-4 py-2.5 sm:px-6 lg:px-8">
            <a href="/" class="flex shrink-0 items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded bg-white/15">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" /></svg>
                </div>
                <span class="text-lg font-bold text-white">Skelbiu</span>
            </a>

            <form action="#" method="GET" class="hidden flex-1 md:flex">
                <div class="flex w-full items-center overflow-hidden rounded bg-white">
                    <select name="category" class="border-r border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 outline-none">
                        <option>Kategorija</option>
                        <option>Transportas</option>
                        <option>Nekilnojamasis turtas</option>
                        <option>Buitis</option>
                        <option>Kompiuterija</option>
                        <option>Technika</option>
                        <option>Drabužiai</option>
                        <option>Pramogos</option>
                    </select>
                    <input type="text" name="query" placeholder="Ieškokite tarp 860 232 skelbimų" class="min-w-0 flex-1 px-3 py-2 text-sm text-gray-700 outline-none placeholder-gray-400">
                    <select name="city" class="border-l border-gray-200 bg-white px-3 py-2 text-sm text-gray-700 outline-none">
                        <option>Visi miestai</option>
                        <option>Vilnius</option>
                        <option>Kaunas</option>
                        <option>Klaipėda</option>
                        <option>Šiauliai</option>
                        <option>Panevėžys</option>
                    </select>
                    <button type="submit" class="bg-green-500 px-5 py-2 text-sm font-bold text-white transition hover:bg-green-400">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                    </button>
                </div>
            </form>

            <div class="hidden items-center gap-1 md:flex">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded p-2 text-green-200 transition hover:bg-white/10 hover:text-white" aria-label="Valdymas">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded p-2 text-green-200 transition hover:bg-white/10 hover:text-white" aria-label="Atsijungti">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" /></svg>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="rounded px-3 py-1.5 text-sm font-medium text-green-100 transition hover:bg-white/10 hover:text-white">Prisijungti</a>
                    <a href="{{ route('register') }}" class="rounded px-3 py-1.5 text-sm font-medium text-green-100 transition hover:bg-white/10 hover:text-white">Registruotis</a>
                @endauth
            </div>

            @auth
                <a href="{{ route('dashboard.listings.create') }}" class="hidden shrink-0 rounded bg-white px-4 py-1.5 text-sm font-bold text-green-700 transition hover:bg-green-50 md:inline-flex md:items-center md:gap-1.5">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Įdėti skelbimą
                </a>
            @else
                <a href="{{ route('login') }}" class="hidden shrink-0 rounded bg-white px-4 py-1.5 text-sm font-bold text-green-700 transition hover:bg-green-50 md:inline-flex md:items-center md:gap-1.5">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Įdėti skelbimą
                </a>
            @endauth

            <button class="inline-flex items-center justify-center rounded p-2 text-green-200 transition hover:text-white md:hidden" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-b border-green-700 bg-green-600 md:hidden">
        <div class="px-4 py-3">
            <form action="#" method="GET" class="flex flex-col gap-2">
                <input type="text" name="query" placeholder="Ieškokite skelbimų..." class="w-full rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none placeholder-gray-400">
                <div class="flex gap-2">
                    <select name="category" class="flex-1 rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none">
                        <option>Kategorija</option>
                    </select>
                    <select name="city" class="flex-1 rounded border-0 px-3 py-2.5 text-sm text-gray-700 outline-none">
                        <option>Visi miestai</option>
                    </select>
                </div>
                <button type="submit" class="w-full rounded bg-green-500 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-green-400">Ieškoti</button>
            </form>
        </div>
        <div class="border-t border-green-500 px-4 py-3 space-y-2">
            @auth
                <a href="{{ route('dashboard.listings.create') }}" class="block w-full rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-green-700">+ Įdėti skelbimą</a>
                <a href="{{ route('dashboard') }}" class="block w-full rounded bg-green-500 px-4 py-2.5 text-center text-sm font-medium text-white">Valdymas</a>
            @else
                <a href="{{ route('login') }}" class="block w-full rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-green-700">Prisijungti</a>
                <a href="{{ route('register') }}" class="block w-full rounded bg-green-500 px-4 py-2.5 text-center text-sm font-medium text-white">Registruotis</a>
            @endauth
        </div>
    </div>
</nav>
