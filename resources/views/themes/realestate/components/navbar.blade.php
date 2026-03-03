<nav class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur-md" x-data="{ mobileOpen: false }">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="/" class="flex items-center gap-2">
            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-emerald-600 to-green-700">
                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-tight text-gray-900">NT Portalas</span>
        </a>

        <div class="hidden items-center gap-6 md:flex">
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-emerald-600">Parduodami</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-emerald-600">Nuomojami</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-emerald-600">Nauji projektai</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-emerald-600">Vertinimas</a>
        </div>

        <div class="hidden items-center gap-3 md:flex">
            <x-button variant="ghost" size="sm">Prisijungti</x-button>
            <x-button variant="primary" size="sm">Įdėti skelbimą</x-button>
        </div>

        <button
            class="inline-flex items-center justify-center rounded-lg p-2 text-gray-600 transition hover:bg-gray-100 md:hidden"
            @click="mobileOpen = !mobileOpen"
            aria-label="Toggle menu"
        >
            <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-t border-gray-100 md:hidden">
        <div class="space-y-1 px-4 py-3">
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Parduodami</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Nuomojami</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Nauji projektai</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Vertinimas</a>
        </div>
        <div class="border-t border-gray-100 px-4 py-3">
            <div class="flex flex-col gap-2">
                <x-button variant="ghost" size="sm" class="w-full justify-center">Prisijungti</x-button>
                <x-button variant="primary" size="sm" class="w-full justify-center">Įdėti skelbimą</x-button>
            </div>
        </div>
    </div>
</nav>
