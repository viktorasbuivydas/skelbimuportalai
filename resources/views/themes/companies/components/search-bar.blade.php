<form action="#" method="GET" class="w-full">
    <div class="flex flex-col gap-3 rounded-2xl bg-white p-3 shadow-xl sm:flex-row sm:items-center sm:gap-2 sm:rounded-full sm:p-2">
        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input
                type="text"
                name="name"
                placeholder="Įmonės pavadinimas"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
            <input
                type="text"
                name="city"
                placeholder="Miestas"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
            </svg>
            <input
                type="text"
                name="category"
                placeholder="Kategorija"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <x-button variant="primary" size="lg" class="rounded-full! bg-gradient-to-r! from-indigo-500! to-indigo-700! hover:from-indigo-600! hover:to-indigo-800! focus:ring-indigo-500! sm:rounded-full! sm:px-6!">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <span>Ieškoti</span>
        </x-button>
    </div>
</form>
