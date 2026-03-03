<form action="#" method="GET" class="w-full md:hidden">
    <div class="rounded-lg border border-gray-200 bg-white p-3 shadow-sm">
        <input type="text" name="location" placeholder="Miestas, rajonas ar adresas..." class="mb-2 w-full rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-teal-500 placeholder-gray-400">
        <div class="flex gap-2">
            <select name="type" class="flex-1 rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-teal-500">
                <option>Visi tipai</option>
                <option>Apartamentai</option>
                <option>Butai</option>
                <option>Namai</option>
            </select>
            <select name="guests" class="flex-1 rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-teal-500">
                <option>Svečių sk.</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4+</option>
            </select>
        </div>
        <button type="submit" class="mt-2 w-full rounded bg-teal-600 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-teal-700">Ieškoti</button>
    </div>
</form>
