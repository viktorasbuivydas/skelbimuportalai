<nav class="sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="bg-blue-700">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2.5 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center gap-2.5">
                <div class="flex h-8 w-8 items-center justify-center rounded-md bg-white/15">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                </div>
                <span class="text-lg font-bold text-white">AutoSkelbimai</span>
            </a>

            <div class="hidden items-center gap-3 md:flex">
                <a href="#" class="rounded-md px-3 py-1.5 text-sm font-medium text-blue-100 transition hover:bg-white/10 hover:text-white">Prisijungti</a>
                <a href="#" class="rounded-md bg-orange-500 px-4 py-1.5 text-sm font-bold text-white transition hover:bg-orange-400">
                    + Dėti skelbimą
                </a>
            </div>

            <button class="inline-flex items-center justify-center rounded-lg p-2 text-blue-200 transition hover:text-white md:hidden" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <div class="border-b border-blue-800 bg-blue-600">
        <div class="mx-auto hidden max-w-7xl items-center gap-1 px-4 sm:px-6 md:flex lg:px-8">
            <a href="#" class="border-b-2 border-white px-4 py-2.5 text-sm font-semibold text-white">Automobiliai</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2.5 text-sm font-medium text-blue-200 transition hover:border-blue-300 hover:text-white">Moto</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2.5 text-sm font-medium text-blue-200 transition hover:border-blue-300 hover:text-white">Komerciniai</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2.5 text-sm font-medium text-blue-200 transition hover:border-blue-300 hover:text-white">Dalys</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2.5 text-sm font-medium text-blue-200 transition hover:border-blue-300 hover:text-white">Padangos</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2.5 text-sm font-medium text-blue-200 transition hover:border-blue-300 hover:text-white">Žemės ūkis</a>
        </div>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-b border-blue-800 bg-blue-700 md:hidden">
        <div class="space-y-1 px-4 py-3">
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-semibold text-white bg-white/10">Automobiliai</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-blue-200 hover:bg-white/10">Moto</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-blue-200 hover:bg-white/10">Komerciniai</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-blue-200 hover:bg-white/10">Dalys</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-blue-200 hover:bg-white/10">Padangos</a>
        </div>
        <div class="border-t border-blue-600 px-4 py-3">
            <a href="#" class="block rounded-lg bg-orange-500 px-4 py-2.5 text-center text-sm font-bold text-white">+ Dėti skelbimą</a>
        </div>
    </div>
</nav>
