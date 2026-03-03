<form action="#" method="GET" class="w-full">
    <div class="flex flex-col gap-2 sm:flex-row sm:items-end">
        <div class="flex-1">
            <label class="mb-1 block text-xs text-gray-500">Pareigos, įmonė ar raktažodis</label>
            <input type="text" name="query" placeholder="pvz. programuotojas, vadybininkas..." class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-red-500">
        </div>
        <div class="w-full sm:w-40">
            <label class="mb-1 block text-xs text-gray-500">Miestas</label>
            <select name="city" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-red-500">
                <option value="">Visi miestai</option>
                <option>Vilnius</option>
                <option>Kaunas</option>
                <option>Klaipėda</option>
                <option>Šiauliai</option>
                <option>Panevėžys</option>
            </select>
        </div>
        <div class="w-full sm:w-44">
            <label class="mb-1 block text-xs text-gray-500">Kategorija</label>
            <select name="category" class="w-full rounded border border-gray-300 px-3 py-2 text-sm text-gray-700 outline-none focus:border-red-500">
                <option value="">Visos kategorijos</option>
                <option>IT ir telekomunikacijos</option>
                <option>Finansai ir apskaita</option>
                <option>Prekyba</option>
                <option>Medicina</option>
                <option>Statyba</option>
                <option>Transportas</option>
            </select>
        </div>
        <button type="submit" class="rounded bg-red-600 px-6 py-2 text-sm font-bold text-white transition hover:bg-red-700">Ieškoti</button>
    </div>
</form>
