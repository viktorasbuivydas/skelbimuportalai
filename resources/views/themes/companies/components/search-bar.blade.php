<form action="#" method="GET" class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
    <div class="flex flex-col gap-2 sm:flex-row sm:items-end">
        <div class="flex-1">
            <label class="mb-1 block text-xs text-gray-500">Įmonės pavadinimas</label>
            <input type="text" name="name" placeholder="pvz. UAB Technologijų Sprendimai" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-indigo-500">
        </div>
        <div class="flex-1">
            <label class="mb-1 block text-xs text-gray-500">Paieškos žodis</label>
            <input type="text" name="keyword" placeholder="pvz. statyba, remontas, IT..." class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-indigo-500">
        </div>
        <div class="w-full sm:w-36">
            <label class="mb-1 block text-xs text-gray-500">Miestas</label>
            <select name="city" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-indigo-500">
                <option value="">Visi miestai</option>
                <option>Vilnius</option>
                <option>Kaunas</option>
                <option>Klaipėda</option>
                <option>Šiauliai</option>
                <option>Panevėžys</option>
            </select>
        </div>
        <button type="submit" class="rounded bg-indigo-600 px-6 py-2 text-sm font-bold text-white transition hover:bg-indigo-700">Ieškoti</button>
    </div>
    <div class="mt-2 text-right">
        <a href="#" class="text-xs text-indigo-600 hover:underline">Detali paieška →</a>
    </div>
</form>
