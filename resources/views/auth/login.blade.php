<x-layouts.app title="Prisijungti">
    <div class="flex min-h-[60vh] items-center justify-center">
        <div class="w-full max-w-md">
            <div class="rounded-xl border border-gray-200 bg-white p-8 shadow-sm">
                <h1 class="mb-1 text-2xl font-bold text-gray-900">Prisijungti</h1>
                <p class="mb-6 text-sm text-gray-500">Įveskite savo prisijungimo duomenis</p>

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="mb-1 block text-sm font-medium text-gray-700">El. paštas</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('email') border-red-400 @enderror"
                            placeholder="jusu@pastas.lt"
                        >
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-1 block text-sm font-medium text-gray-700">Slaptažodis</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500/20 @error('password') border-red-400 @enderror"
                            placeholder="••••••••"
                        >
                        @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Prisiminti mane</label>
                    </div>

                    <button type="submit" class="w-full rounded-lg bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500/50">
                        Prisijungti
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-500">
                    Neturite paskyros?
                    <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-800">Registruotis</a>
                </p>
            </div>
        </div>
    </div>
</x-layouts.app>
