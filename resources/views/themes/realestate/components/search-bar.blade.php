<form action="#" method="GET" class="w-full">
    <div class="flex flex-col gap-3 rounded-2xl bg-white p-3 shadow-xl sm:flex-row sm:items-center sm:gap-2 sm:rounded-full sm:p-2">
        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <input
                type="text"
                name="location"
                placeholder="Adresas arba rajonas"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
            </svg>
            <input
                type="text"
                name="type"
                placeholder="Tipas (Butas / Namas / Sklypas)"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <input
                type="number"
                name="price_max"
                placeholder="Kaina iki (€)"
                min="0"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <x-button variant="primary" size="lg" class="rounded-full! sm:rounded-full! sm:px-6!">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <span>Ieškoti</span>
        </x-button>
    </div>
</form>
