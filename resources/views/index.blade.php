<x-marketing.layouts.app title="Skelbimuportalai.lt — Paleiskite savo skelbimų portalą per savaitę">

    <x-marketing.hero />

    <x-marketing.feature-grid>
        <x-marketing.feature-item icon="theme" title="Paruoštos temos"
            description="Kiekviena tema — pilnai veikiantis katalogas su visais puslapiais ir komponentais. Ne maketas, o baigtas produktas."
            :delay="300" />
        <x-marketing.feature-item icon="search" title="Paieška ir filtravimas"
            description="Paieška pagal lokaciją, kategorijas, kainas ir kitus parametrus. Naudotojai randa tai, ko jiems reikia."
            :delay="400" />
        <x-marketing.feature-item icon="dashboard" title="Admin panelė"
            description="Valdykite skelbimus, naudotojus, kategorijas ir nustatymus. Tvirtinkite pateiktus skelbimus, sekite augimą."
            :delay="500" />
        <x-marketing.feature-item icon="payments" title="Monetizacija"
            description="Imkite mokestį už iškeltus skelbimus, prenumeratas ar premijines vietas. Stripe integracija iš karto."
            :delay="600" />
        <x-marketing.feature-item icon="seo" title="SEO optimizacija"
            description="Tvarkingi URL adresai, struktūriniai duomenys, automatiniai sitemap failai ir meta žymos."
            :delay="700" />
        <x-marketing.feature-item icon="api" title="Švarus kodas"
            description="Laravel architektūra su Blade komponentais ir Eloquent modeliais. Plėskite be apribojimų."
            :delay="800" />
    </x-marketing.feature-grid>

    <x-marketing.theme-showcase />

    {{-- Kaip tai veikia --}}
    <section class="relative border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }"
        x-intersect.once="shown = true">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div
                class="absolute left-1/2 bottom-0 h-[300px] w-[500px] -translate-x-1/2 translate-y-1/2 rounded-full bg-violet-600/8 blur-[100px]">
            </div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-4 flex items-center justify-center gap-2 opacity-0" :class="shown && 'animate-fade-up'"
                style="animation-delay: 0ms">
                <span
                    class="inline-flex items-center gap-1.5 rounded-full border border-violet-500/20 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-300">
                    <span class="h-1 w-1 rounded-full bg-violet-400"></span>
                    Procesas
                </span>
            </div>
            <h2 class="text-center text-2xl font-bold tracking-tight text-white opacity-0 sm:text-3xl"
                :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
                Trys žingsniai iki veikiančio katalogo
            </h2>
            <p class="mx-auto mt-3 max-w-lg text-center text-base text-gray-500 opacity-0"
                :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
                Nuo idėjos iki veikiančio produkto — per savaitę.
            </p>

            <div class="relative mx-auto mt-16 max-w-4xl">
                {{-- Connecting line (desktop) --}}
                <div
                    class="absolute left-0 right-0 top-10 hidden h-px bg-gradient-to-r from-transparent via-violet-500/30 to-transparent sm:block">
                </div>

                <div class="grid gap-8 sm:grid-cols-3 sm:gap-6">
                    @php
                        $steps = [
                            [
                                'number' => '01',
                                'title' => 'Pasirinkite temą',
                                'description' =>
                                    'Peržiūrėkite demo versiją. Nuoma, paslaugos, renginiai — rinkitės, kas tinka jūsų nišai.',
                                'icon' =>
                                    'M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Mes pritaikome',
                                'description' =>
                                    'Pakeičiame dizainą, spalvas, logotipą. Sukuriame kategorijas ir integruojame mokėjimus.',
                                'icon' =>
                                    'M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Paleiskite ir uždirbkite',
                                'description' =>
                                    'Gaunat veikiantį katalogą su admin panele, diegiame į serverį. Viskas paruošta per savaitę.',
                                'icon' =>
                                    'M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z',
                            ],
                        ];
                    @endphp

                    @foreach ($steps as $i => $step)
                        <div class="relative flex flex-col items-center text-center opacity-0"
                            :class="shown && 'animate-fade-up'" style="animation-delay: {{ 300 + $i * 150 }}ms">
                            <div
                                class="relative z-10 flex h-20 w-20 items-center justify-center rounded-2xl border border-white/5 bg-gray-900">
                                <div
                                    class="absolute -inset-px rounded-2xl bg-gradient-to-b from-violet-500/20 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <svg class="h-6 w-6 text-violet-400" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $step['icon'] }}" />
                                    </svg>
                                    <span
                                        class="text-[10px] font-bold tracking-widest text-violet-400/60">{{ $step['number'] }}</span>
                                </div>
                            </div>

                            <h3 class="mt-5 text-base font-semibold text-white">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-gray-500">{{ $step['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-marketing.pricing />

    <x-marketing.faq />

    {{-- CTA --}}
    <section class="relative border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }"
        x-intersect.once="shown = true">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div
                class="absolute left-1/2 top-1/2 h-[400px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-600/10 blur-[120px]">
            </div>
        </div>
        <div class="relative mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-white opacity-0 sm:text-3xl" :class="shown && 'animate-fade-up'"
                style="animation-delay: 0ms">
                Pasiruošę paleisti savo katalogą?
            </h2>
            <p class="mx-auto mt-3 max-w-lg text-base text-gray-500 opacity-0" :class="shown && 'animate-fade-up'"
                style="animation-delay: 100ms">
                Nustokite leisti mėnesius infrastruktūrai. Gaukite veikiantį katalogą šią savaitę.
            </p>
            <div class="mt-8 flex flex-col items-center justify-center gap-3 opacity-0 sm:flex-row"
                :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
                <a href="#kainos"
                    class="inline-flex items-center gap-2 rounded-full bg-violet-600 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-600/25 transition hover:bg-violet-500">
                    Pradėti dabar
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="#temos"
                    class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-7 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">
                    Peržiūrėti demo
                </a>
            </div>
        </div>
    </section>

</x-marketing.layouts.app>
