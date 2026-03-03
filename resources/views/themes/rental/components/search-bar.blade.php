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
                placeholder="Miestas arba rajonas"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
            </svg>
            <input
                type="text"
                name="dates"
                placeholder="Atvykimas — Išvykimas"
                class="w-full bg-transparent text-sm text-gray-800 placeholder-gray-400 outline-none"
            >
        </div>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <div class="flex flex-1 items-center gap-3 rounded-xl px-4 py-2 sm:rounded-full sm:hover:bg-gray-50">
            <svg class="h-5 w-5 shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            <input
                type="number"
                name="guests"
                placeholder="Svečių skaičius"
                min="1"
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
