<nav class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur-md" x-data="{ mobileOpen: false }">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="/" class="flex items-center gap-2">
            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-rose-500 to-pink-600">
                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </div>
            <span class="text-xl font-bold tracking-tight text-gray-900">Turgus</span>
        </a>

        <div class="hidden items-center gap-6 md:flex">
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-rose-600">Elektronika</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-rose-600">Baldai</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-rose-600">Drabužiai</a>
            <a href="#" class="text-sm font-medium text-gray-600 transition hover:text-rose-600">Kita</a>
        </div>

        <div class="hidden items-center gap-3 md:flex">
            <x-button variant="ghost" size="sm">Prisijungti</x-button>
            <x-button variant="primary" size="sm" class="from-rose-500! to-pink-600! hover:from-rose-600! hover:to-pink-700! focus:ring-rose-500!">Parduoti</x-button>
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
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Elektronika</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Baldai</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Drabužiai</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Kita</a>
        </div>
        <div class="border-t border-gray-100 px-4 py-3">
            <div class="flex flex-col gap-2">
                <x-button variant="ghost" size="sm" class="w-full justify-center">Prisijungti</x-button>
                <x-button variant="primary" size="sm" class="w-full justify-center from-rose-500! to-pink-600! hover:from-rose-600! hover:to-pink-700! focus:ring-rose-500!">Parduoti</x-button>
            </div>
        </div>
    </div>
</nav>
