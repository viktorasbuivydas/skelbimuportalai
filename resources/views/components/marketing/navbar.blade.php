<nav class="fixed top-0 z-50 w-full" x-data="{ mobileOpen: false }">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-5 sm:px-6 lg:px-8">
        <a href="/marketing" class="flex items-center gap-2">
            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-violet-600">
                <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25a2.25 2.25 0 0 1-2.25-2.25v-2.25Z" />
                </svg>
            </div>
            <span class="text-lg font-bold text-white">Skelbimuportalai.lt</span>
        </a>

        <div
            class="hidden items-center gap-1 rounded-full border border-white/10 bg-white/5 px-1.5 py-1.5 backdrop-blur-md md:flex">
            <a href="#galimybes"
                class="rounded-full px-4 py-1.5 text-sm text-gray-400 transition hover:bg-white/10 hover:text-white">Galimybės</a>
            <a href="#temos"
                class="rounded-full px-4 py-1.5 text-sm text-gray-400 transition hover:bg-white/10 hover:text-white">Temos</a>
            <a href="#kainos"
                class="rounded-full px-4 py-1.5 text-sm text-gray-400 transition hover:bg-white/10 hover:text-white">Kainos</a>
            <a href="#duk"
                class="rounded-full px-4 py-1.5 text-sm text-gray-400 transition hover:bg-white/10 hover:text-white">DUK</a>
        </div>

        <a href="#kainos"
            class="hidden rounded-full bg-violet-600 px-5 py-2 text-sm font-medium text-white transition hover:bg-violet-500 md:inline-flex">
            Pradėti
        </a>

        <button
            class="inline-flex items-center justify-center rounded-lg p-2 text-gray-400 transition hover:text-white md:hidden"
            @click="mobileOpen = !mobileOpen" aria-label="Meniu">
            <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-t border-white/5 bg-gray-950/95 backdrop-blur-xl md:hidden">
        <div class="space-y-1 px-4 py-4">
            <a href="#galimybes"
                class="block rounded-lg px-4 py-2.5 text-sm text-gray-400 hover:bg-white/5 hover:text-white">Galimybės</a>
            <a href="#temos"
                class="block rounded-lg px-4 py-2.5 text-sm text-gray-400 hover:bg-white/5 hover:text-white">Temos</a>
            <a href="#kainos"
                class="block rounded-lg px-4 py-2.5 text-sm text-gray-400 hover:bg-white/5 hover:text-white">Kainos</a>
            <a href="#duk"
                class="block rounded-lg px-4 py-2.5 text-sm text-gray-400 hover:bg-white/5 hover:text-white">DUK</a>
            <a href="#kainos"
                class="mt-2 block rounded-lg bg-violet-600 px-4 py-2.5 text-center text-sm font-medium text-white">Pradėti</a>
        </div>
    </div>
</nav>
