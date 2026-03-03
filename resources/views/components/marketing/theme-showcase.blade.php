@props(['id' => 'temos'])

<section id="{{ $id }}" class="relative border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }" x-intersect.once="shown = true">
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute right-0 top-1/2 h-[400px] w-[400px] -translate-y-1/2 translate-x-1/2 rounded-full bg-violet-600/10 blur-[120px]"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-center gap-2 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 0ms">
            <span class="inline-flex items-center gap-1.5 rounded-full border border-violet-500/20 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-300">
                <span class="h-1 w-1 rounded-full bg-violet-400"></span>
                Temos
            </span>
        </div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-white opacity-0 sm:text-3xl" :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
            Paruoštos temos
        </h2>
        <p class="mx-auto mt-3 max-w-lg text-center text-base text-gray-500 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
            Kiekviena tema &mdash; pilnai veikiantis katalogas. Pasirinkite ir paleiskite šią savaitę.
        </p>

        <div class="mt-14 grid gap-6 lg:grid-cols-2">
            <a href="/" class="group relative block overflow-hidden rounded-2xl border border-white/5 bg-white/[0.02] opacity-0 transition-all hover:border-violet-500/30" :class="shown && 'animate-fade-up'" style="animation-delay: 300ms">
                <div class="aspect-[16/10] overflow-hidden">
                    <img
                        src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=900&q=80"
                        alt="Nuomos katalogo tema"
                        class="h-full w-full object-cover opacity-70 transition-all duration-500 group-hover:scale-105 group-hover:opacity-90"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/40 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-6 sm:p-8">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/15 px-2.5 py-0.5 text-xs font-medium text-emerald-400 ring-1 ring-emerald-500/25">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                        Galima įsigyti
                    </span>
                    <h3 class="mt-3 text-xl font-bold text-white">Nuomos katalogas</h3>
                    <p class="mt-1.5 text-sm text-gray-400">Trumpalaikės nuomos skelbimai su paieška, lokacijomis ir kalendoriumi.</p>
                    <span class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-violet-400 transition group-hover:text-violet-300">
                        Peržiūrėti demo
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                    </span>
                </div>
            </a>

            <div class="relative flex items-center justify-center overflow-hidden rounded-2xl border border-white/5 bg-white/[0.02] opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 450ms">
                <div class="aspect-[16/10] w-full"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl border border-dashed border-white/10 text-gray-600">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                        </div>
                        <h3 class="mt-4 text-base font-semibold text-white">Paslaugų katalogas</h3>
                        <p class="mt-1.5 text-sm text-gray-500">Vietiniai paslaugų teikėjai, atsiliepimai, rezervacijos.</p>
                        <span class="mt-3 inline-flex items-center rounded-full bg-amber-500/10 px-2.5 py-0.5 text-xs font-medium text-amber-400 ring-1 ring-amber-500/20">
                            Greitai
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
