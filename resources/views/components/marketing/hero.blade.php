<section class="relative overflow-hidden pb-20 pt-28 sm:pb-32 sm:pt-36 lg:pt-44">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-1/2 top-0 h-[600px] w-[800px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-600/15 blur-[120px]"></div>
        <div class="absolute bottom-0 left-1/4 h-[300px] w-[400px] rounded-full bg-indigo-600/10 blur-[100px]"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center" x-data="{ shown: false }" x-intersect.once="shown = true">
            <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-violet-500/20 bg-violet-500/10 px-4 py-1.5 text-sm text-violet-300 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 0ms">
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456Z" />
                </svg>
                Paruošti katalogai verslui
            </div>

            <h1 class="text-4xl font-extrabold leading-[1.08] tracking-tight text-white opacity-0 sm:text-5xl lg:text-6xl" :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
                Paleiskite savo katalogą
                <span class="bg-gradient-to-r from-violet-400 to-indigo-400 bg-clip-text text-transparent">per savaitę,</span>
                ne mėnesius
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-lg leading-relaxed text-gray-400 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
                Mes paruošiame ir pritaikome katalogą jūsų verslui. Jūs gaunate veikiantį produktą su admin panele, mokėjimais ir SEO.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-3 opacity-0 sm:flex-row" :class="shown && 'animate-fade-up'" style="animation-delay: 300ms">
                <a href="#temos" class="inline-flex items-center gap-2 rounded-full bg-violet-600 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-600/25 transition hover:bg-violet-500">
                    Peržiūrėti demo
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                </a>
                <a href="#kainos" class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-7 py-3 text-sm font-semibold text-gray-300 backdrop-blur-sm transition hover:bg-white/10 hover:text-white">
                    Kainos
                </a>
            </div>
        </div>

        <div class="relative mx-auto mt-20 max-w-5xl" x-data="{ shown: false }" x-intersect.once="shown = true">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                @foreach([
                    ['icon' => 'm21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z', 'color' => 'violet', 'label' => 'Paieška', 'text' => 'Išmani filtravimo sistema'],
                    ['icon' => 'M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z', 'color' => 'emerald', 'label' => 'Mokėjimai', 'text' => 'Stripe integracija'],
                    ['icon' => 'M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25a2.25 2.25 0 0 1-2.25-2.25v-2.25Z', 'color' => 'amber', 'label' => 'Admin', 'text' => 'Valdymo panelė'],
                    ['icon' => 'M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418', 'color' => 'sky', 'label' => 'SEO', 'text' => 'Optimizuota Google'],
                ] as $i => $card)
                    <div class="rounded-2xl border border-white/5 bg-white/[0.03] p-5 opacity-0 backdrop-blur-sm" :class="shown && 'animate-fade-up'" style="animation-delay: {{ 400 + $i * 100 }}ms">
                        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-{{ $card['color'] }}-500/10 text-{{ $card['color'] }}-400">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['icon'] }}" /></svg>
                        </div>
                        <p class="mt-3 text-xs font-medium text-gray-400">{{ $card['label'] }}</p>
                        <p class="mt-0.5 text-sm font-semibold text-white">{{ $card['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
