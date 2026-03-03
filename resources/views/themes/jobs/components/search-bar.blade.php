<form action="#" method="GET" class="w-full">
    <div class="flex flex-col gap-3 rounded-2xl bg-white p-3 shadow-xl sm:flex-row sm:items-center sm:gap-2 sm:rounded-full sm:p-2">
        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input
                type="text"
                name="query"
                placeholder="Pareigos arba įmonė"
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
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
            </svg>
            <input
                type="text"
                name="category"
                placeholder="Kategorija"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <x-button variant="primary" size="lg" class="rounded-full! sm:rounded-full! sm:px-6! from-orange-500! to-amber-600! hover:from-orange-600! hover:to-amber-700! focus:ring-orange-500!">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <span>Ieškoti</span>
        </x-button>
    </div>
</form>
