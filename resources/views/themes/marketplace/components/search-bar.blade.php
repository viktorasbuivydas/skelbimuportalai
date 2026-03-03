<form action="#" method="GET" class="w-full md:hidden">
    <div class="rounded-lg border border-gray-200 bg-white p-3 shadow-sm">
        <input type="text" name="query" placeholder="Ieškokite skelbimų..." class="mb-2 w-full rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-green-500 placeholder-gray-400">
        <div class="flex gap-2">
            <select name="category" class="flex-1 rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-green-500">
                <option>Kategorija</option>
            </select>
            <select name="city" class="flex-1 rounded border border-gray-300 px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-green-500">
                <option>Visi miestai</option>
            </select>
        </div>
        <button type="submit" class="mt-2 w-full rounded bg-green-600 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-green-700">Ieškoti</button>
    </div>
</form>
