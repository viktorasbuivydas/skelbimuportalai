@props(['id' => 'duk'])

<section id="{{ $id }}" class="border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }" x-intersect.once="shown = true">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-center gap-2 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 0ms">
            <span class="inline-flex items-center gap-1.5 rounded-full border border-violet-500/20 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-300">
                <span class="h-1 w-1 rounded-full bg-violet-400"></span>
                DUK
            </span>
        </div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-white opacity-0 sm:text-3xl" :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
            Dažnai užduodami klausimai
        </h2>

        <div class="mt-10 space-y-3" x-data="{ openItem: null }">
            @php
                $faqs = [
                    [
                        'question' => 'Ką tiksliai gaunu?',
                        'answer' => 'Paruoštą ir veikiantį katalogą, pritaikytą jūsų verslui. Mes atliekame visus programavimo darbus prieš paleidimą &mdash; modifikuojame temą, keičiame dizainą, integruojame mokėjimus ir pritaikome funkcionalumą pagal jūsų poreikius. Jūs gaunate pilnai paruoštą produktą.',
                    ],
                    [
                        'question' => 'Ar man reikia programuotojo?',
                        'answer' => 'Ne. Mes padarome viską iki paleidimo &mdash; nuo temos pritaikymo iki diegimo. Po paleidimo katalogas valdomas per paprastą admin panelę: skelbimų tvirtinimas, kategorijų kūrimas, nustatymų keitimas. Jokio programavimo nereikia.',
                    ],
                    [
                        'question' => 'Ar galite pritaikyti temą mano verslui?',
                        'answer' => 'Taip, tai yra įskaičiuota. Prieš paleidimą mes pakeičiame logotipą, spalvas, tekstus, sukuriame kategorijas ir pritaikome temą jūsų nišai. Jei reikia papildomų funkcijų &mdash; įgyvendiname pagal jūsų techninius reikalavimus.',
                    ],
                    [
                        'question' => 'Kaip greitai bus paleista?',
                        'answer' => 'Standartinis paleidimas užtrunka 5&ndash;7 darbo dienas. Tai apima temos pritaikymą, turinio suvedimą, mokėjimų integraciją ir diegimą į serverį. Sudėtingesni projektai su individualiu funkcionalumu &mdash; iki 2 savaičių.',
                    ],
                    [
                        'question' => 'Ar galiu vėliau keisti ir plėsti katalogą?',
                        'answer' => 'Taip. Jūs gaunate pilną Laravel kodą ir galite keisti bet ką pačių arba su savo programuotoju. Mes taip pat siūlome tolimesnio palaikymo ir plėtros paslaugas.',
                    ],
                    [
                        'question' => 'Kiek kainuoja hostingas?',
                        'answer' => 'Katalogas veikia ant bet kokio serverio, palaikančio Laravel &mdash; nuo 10&euro;/mėn. VPS iki dedikuotų sprendimų. Padedame pasirinkti ir sukonfigūruoti hostingą pagal jūsų apkrovą.',
                    ],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <div class="rounded-xl border border-white/5 bg-white/[0.02] opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: {{ 200 + $index * 80 }}ms">
                    <button
                        class="flex w-full items-center justify-between px-5 py-4 text-left transition hover:bg-white/[0.02]"
                        @click="openItem = openItem === {{ $index }} ? null : {{ $index }}"
                    >
                        <span class="text-sm font-semibold text-white">{{ $faq['question'] }}</span>
                        <svg
                            class="h-4 w-4 shrink-0 text-gray-600 transition-transform duration-200"
                            :class="{ 'rotate-180': openItem === {{ $index }} }"
                            fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div x-show="openItem === {{ $index }}" x-collapse>
                        <div class="border-t border-white/5 px-5 pb-4 pt-3 text-sm leading-relaxed text-gray-400">
                            {!! $faq['answer'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
