<nav class="sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="bg-red-600">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2.5 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded bg-white/15">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </div>
                <span class="text-lg font-bold text-white">Darbas.lt</span>
            </a>

            <div class="hidden items-center gap-1 md:flex">
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-red-100 transition hover:bg-white/10 hover:text-white">Darbo skelbimai</a>
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-red-100 transition hover:bg-white/10 hover:text-white">Įmonės</a>
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-red-100 transition hover:bg-white/10 hover:text-white">CV kūrimas</a>
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-red-100 transition hover:bg-white/10 hover:text-white">Atlyginimai</a>
            </div>

            <div class="hidden items-center gap-2 md:flex">
                <a href="#" class="rounded px-3 py-1.5 text-sm font-medium text-white transition hover:bg-white/10">Prisijungti</a>
                <a href="#" class="rounded bg-white px-4 py-1.5 text-sm font-bold text-red-600 transition hover:bg-red-50">Registruotis</a>
            </div>

            <button class="inline-flex items-center justify-center rounded p-2 text-red-200 transition hover:text-white md:hidden" @click="mobileOpen = !mobileOpen" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>

    <div class="border-b border-red-700 bg-red-500">
        <div class="mx-auto hidden max-w-7xl items-center gap-1 px-4 sm:px-6 md:flex lg:px-8">
            <a href="#" class="border-b-2 border-white px-4 py-2 text-sm font-semibold text-white">Visi skelbimai</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">IT</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">Finansai</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">Prekyba</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">Medicina</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">Statyba</a>
            <a href="#" class="border-b-2 border-transparent px-4 py-2 text-sm font-medium text-red-200 transition hover:text-white">Transportas</a>
        </div>
    </div>

    <div x-show="mobileOpen" x-collapse class="border-b border-red-700 bg-red-600 md:hidden">
        <div class="space-y-1 px-4 py-3">
            <a href="#" class="block rounded px-3 py-2 text-sm font-semibold text-white bg-white/10">Darbo skelbimai</a>
            <a href="#" class="block rounded px-3 py-2 text-sm font-medium text-red-200 hover:bg-white/10">Įmonės</a>
            <a href="#" class="block rounded px-3 py-2 text-sm font-medium text-red-200 hover:bg-white/10">CV kūrimas</a>
            <a href="#" class="block rounded px-3 py-2 text-sm font-medium text-red-200 hover:bg-white/10">Atlyginimai</a>
        </div>
        <div class="border-t border-red-500 px-4 py-3">
            <a href="#" class="block rounded bg-white px-4 py-2.5 text-center text-sm font-bold text-red-600">Registruotis</a>
        </div>
    </div>
</nav>
