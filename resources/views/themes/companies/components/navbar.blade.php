<nav class="sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="bg-indigo-700">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2.5 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded bg-white/15">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                    </svg>
                </div>
                <span class="text-lg font-bold text-white">Įmonės.lt</span>
            </a>

            <div class="hidden items-center gap-1 md:flex">
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-indigo-200 transition hover:bg-white/10 hover:text-white">Katalogas</a>
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-indigo-200 transition hover:bg-white/10 hover:text-white">Naujienos</a>
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-indigo-200 transition hover:bg-white/10 hover:text-white">Apie mus</a>
            </div>

            <div class="hidden items-center gap-1 md:flex">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded p-2 text-indigo-200 transition hover:bg-white/10 hover:text-white" aria-label="Valdymas">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded p-2 text-indigo-200 transition hover:bg-white/10 hover:text-white" aria-label="Atsijungti">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" /></svg>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="rounded px-3 py-1.5 text-sm font-medium text-indigo-100 transition hover:bg-white/10 hover:text-white">Prisijungti</a>
                    <a href="{{ route('register') }}" class="rounded px-3 py-1.5 text-sm font-medium text-indigo-100 transition hover:bg-white/10 hover:text-white">Registruotis</a>
                @endauth
            </div>

            @auth
                <a href="{{ route('dashboard.listings.create') }}" class="hidden shrink-0 rounded bg-white px-4 py-1.5 text-sm font-bold text-indigo-700 transition hover:bg-indigo-50 md:inline-flex md:items-center md:gap-1.5">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Įdėti skelbimą
                </a>
            @else
                <a href="{{ route('login') }}" class="hidden shrink-0 rounded bg-white px-4 py-1.5 text-sm font-bold text-indigo-700 transition hover:bg-indigo-50 md:inline-flex md:items-center md:gap-1.5">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    Įdėti skelbimą
                </a>
            @endauth

            <button class="inline-flex items-center justify-center rounded p-2 text-indigo-200 transition hover:text-white md:hidden" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <div class="border-b border-indigo-800 bg-indigo-600">
        <div class="mx-auto hidden max-w-7xl items-center gap-1 px-4 sm:px-6 md:flex lg:px-8">
            <a href="#" class="border-b-2 border-white px-3 py-2 text-sm font-semibold text-white">Visos kategorijos</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Auto</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Statyba</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Grožis</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Sveikata</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">IT</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Paslaugos</a>
            <a href="#" class="border-b-2 border-transparent px-3 py-2 text-sm font-medium text-indigo-200 transition hover:text-white">Transportas</a>
        </div>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-b border-indigo-700 bg-indigo-700 md:hidden">
        <div class="space-y-1 px-4 py-3">
            <a href="#" class="block rounded px-3 py-2 text-sm font-semibold text-white bg-white/10">Katalogas</a>
            <a href="#" class="block rounded px-3 py-2 text-sm font-medium text-indigo-200 hover:bg-white/10">Naujienos</a>
            <a href="#" class="block rounded px-3 py-2 text-sm font-medium text-indigo-200 hover:bg-white/10">Apie mus</a>
        </div>
        <div class="border-t border-indigo-500 px-4 py-3 space-y-2">
            @auth
                <a href="{{ route('dashboard.listings.create') }}" class="block w-full rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-indigo-700">+ Įdėti skelbimą</a>
                <a href="{{ route('dashboard') }}" class="block w-full rounded bg-indigo-500 px-4 py-2.5 text-center text-sm font-medium text-white">Valdymas</a>
            @else
                <a href="{{ route('login') }}" class="block w-full rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-indigo-700">Prisijungti</a>
                <a href="{{ route('register') }}" class="block w-full rounded bg-indigo-500 px-4 py-2.5 text-center text-sm font-medium text-white">Registruotis</a>
            @endauth
        </div>
    </div>
</nav>
