<x-layouts.app title="Darbas.lt - Nr. 1 darbo skelbimų portalas">

    <x-hero />

    <x-stats-section />

    {{-- Main content: two-column layout --}}
    <section class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 lg:flex-row">

                {{-- Job listings (main column) --}}
                <div class="min-w-0 flex-1">
                    {{-- Featured jobs --}}
                    <div class="mb-6">
                        <h2 class="mb-2 text-base font-bold text-gray-900">Rekomenduojami skelbimai</h2>
                        <div class="divide-y divide-gray-100 overflow-hidden rounded-lg border border-gray-200">
                            <x-job-card
                                title="Vyresnysis PHP programuotojas"
                                company="UAB Technologijų Sprendimai"
                                location="Vilnius"
                                salary="3 500 – 5 000 €"
                                type="Nuolatinis"
                                workMode="Hibridinis"
                                :isFeatured="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=TS&background=dc2626&color=fff&size=80"
                            />
                            <x-job-card
                                title="Finansų analitikas"
                                company="AB SEB bankas"
                                location="Vilnius"
                                salary="2 500 – 3 500 €"
                                type="Nuolatinis"
                                :isFeatured="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=SEB&background=2563eb&color=fff&size=80"
                            />
                            <x-job-card
                                title="Projektų vadovas"
                                company="UAB Statybų Grupė"
                                location="Kaunas"
                                salary="2 800 – 4 000 €"
                                type="Nuolatinis"
                                :isFeatured="true"
                                postedDate="Vakar"
                                logo="https://ui-avatars.com/api/?name=SG&background=16a34a&color=fff&size=80"
                            />
                        </div>
                    </div>

                    {{-- Latest jobs --}}
                    <div class="mb-6">
                        <div class="mb-2 flex items-center justify-between">
                            <h2 class="text-base font-bold text-gray-900">Naujausi darbo skelbimai</h2>
                            <a href="#" class="text-xs font-medium text-red-600 hover:underline">Visi skelbimai →</a>
                        </div>
                        <div class="divide-y divide-gray-100 overflow-hidden rounded-lg border border-gray-200">
                            <x-job-card
                                title="React programuotojas"
                                company="UAB Digital Agency"
                                location="Vilnius"
                                salary="3 000 – 4 500 €"
                                type="Nuolatinis"
                                workMode="Nuotolinis"
                                :isNew="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=DA&background=7c3aed&color=fff&size=80"
                            />
                            <x-job-card
                                title="Pardavimų vadybininkas"
                                company="UAB Baltic Trade"
                                location="Klaipėda"
                                salary="1 500 – 2 800 €"
                                type="Nuolatinis"
                                :isNew="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=BT&background=0891b2&color=fff&size=80"
                            />
                            <x-job-card
                                title="Buhalterė (-is)"
                                company="UAB Apskaitos Centras"
                                location="Vilnius"
                                salary="1 800 – 2 400 €"
                                type="Nuolatinis"
                                workMode="Hibridinis"
                                :isNew="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=AC&background=ca8a04&color=fff&size=80"
                            />
                            <x-job-card
                                title="Marketingo specialistas"
                                company="UAB Media House"
                                location="Kaunas"
                                salary="1 600 – 2 500 €"
                                type="Nuolatinis"
                                workMode="Nuotolinis"
                                :isNew="true"
                                postedDate="Šiandien"
                                logo="https://ui-avatars.com/api/?name=MH&background=e11d48&color=fff&size=80"
                            />
                            <x-job-card
                                title="Sistemos administratorius"
                                company="UAB IT Solutions"
                                location="Vilnius"
                                salary="2 200 – 3 200 €"
                                type="Nuolatinis"
                                postedDate="Vakar"
                                logo="https://ui-avatars.com/api/?name=IT&background=1d4ed8&color=fff&size=80"
                            />
                            <x-job-card
                                title="Sandėlio darbuotojas"
                                company="UAB Logistikos Centras"
                                location="Kaunas"
                                salary="1 200 – 1 600 €"
                                type="Nuolatinis"
                                :isUrgent="true"
                                postedDate="Vakar"
                                logo="https://ui-avatars.com/api/?name=LC&background=ea580c&color=fff&size=80"
                            />
                            <x-job-card
                                title="Teisininkas (-ė)"
                                company="Advokatų kontora Legalis"
                                location="Vilnius"
                                salary="2 500 – 4 000 €"
                                type="Nuolatinis"
                                workMode="Hibridinis"
                                postedDate="Vakar"
                                logo="https://ui-avatars.com/api/?name=AL&background=4338ca&color=fff&size=80"
                            />
                            <x-job-card
                                title="Šaltkalvis-suvirintojas"
                                company="UAB MetalWorks"
                                location="Šiauliai"
                                salary="1 500 – 2 200 €"
                                type="Nuolatinis"
                                postedDate="Prieš 2 d."
                                logo="https://ui-avatars.com/api/?name=MW&background=64748b&color=fff&size=80"
                            />
                            <x-job-card
                                title="Restorano vadovas"
                                company="UAB Gastro Group"
                                location="Vilnius"
                                salary="2 000 – 3 000 €"
                                type="Nuolatinis"
                                postedDate="Prieš 2 d."
                                logo="https://ui-avatars.com/api/?name=GG&background=be123c&color=fff&size=80"
                            />
                            <x-job-card
                                title="Elektrikas"
                                company="UAB Energo Servisas"
                                location="Panevėžys"
                                salary="1 400 – 2 000 €"
                                type="Nuolatinis"
                                postedDate="Prieš 3 d."
                                logo="https://ui-avatars.com/api/?name=ES&background=0d9488&color=fff&size=80"
                            />
                        </div>

                        <div class="mt-4 text-center">
                            <a href="#" class="inline-flex items-center gap-1.5 rounded border border-gray-200 bg-white px-5 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                                Rodyti daugiau skelbimų
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="hidden w-72 shrink-0 space-y-5 lg:block">
                    {{-- Newsletter --}}
                    <div class="rounded-lg border border-gray-200 bg-white p-5">
                        <h3 class="text-sm font-bold text-gray-900">Prenumeruokite naujienas</h3>
                        <p class="mt-1 text-xs text-gray-500">Gaukite naujausius darbo pasiūlymus el. paštu.</p>
                        <input type="email" placeholder="El. paštas" class="mt-3 w-full rounded border border-gray-300 px-3 py-2 text-sm outline-none focus:border-red-500">
                        <button class="mt-2 w-full rounded bg-red-600 py-2 text-sm font-bold text-white transition hover:bg-red-700">Prenumeruoti</button>
                    </div>

                    {{-- Top employers --}}
                    <div class="rounded-lg border border-gray-200 bg-white p-5">
                        <h3 class="text-sm font-bold text-gray-900">Populiariausios įmonės</h3>
                        <div class="mt-3 space-y-2.5">
                            @foreach(['Telia Lietuva' => '45', 'Maxima LT' => '38', 'SEB bankas' => '27', 'Bitė Lietuva' => '22', 'Omnitel' => '19'] as $name => $count)
                                <a href="#" class="flex items-center justify-between rounded px-2 py-1.5 text-sm transition hover:bg-gray-50">
                                    <span class="text-gray-700">{{ $name }}</span>
                                    <span class="text-xs text-gray-400">{{ $count }} sk.</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Salary widget --}}
                    <div class="rounded-lg border border-red-200 bg-red-50 p-5">
                        <h3 class="text-sm font-bold text-red-700">Atlyginimų skaičiuoklė</h3>
                        <p class="mt-1 text-xs text-red-600/70">Sužinokite, kiek turėtumėte uždirbti pagal savo profesiją ir patirtį.</p>
                        <a href="#" class="mt-3 block rounded bg-red-600 py-2 text-center text-sm font-bold text-white transition hover:bg-red-700">Skaičiuoti</a>
                    </div>

                    {{-- Employer reviews --}}
                    <div class="rounded-lg border border-gray-200 bg-white p-5">
                        <h3 class="text-sm font-bold text-gray-900">Naujausi atsiliepimai</h3>
                        <div class="mt-3 space-y-3">
                            <div class="border-b border-gray-100 pb-3">
                                <div class="flex items-center gap-1">
                                    <span class="text-sm font-medium text-gray-800">Telia Lietuva</span>
                                </div>
                                <div class="mt-0.5 flex items-center gap-0.5">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="h-3.5 w-3.5 {{ $i < 4 ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-1 text-xs text-gray-500 line-clamp-2">„Puiki darbo aplinka, lankstus grafikas ir draugiški kolegos. Rekomenduoju."</p>
                            </div>
                            <div class="border-b border-gray-100 pb-3">
                                <div class="flex items-center gap-1">
                                    <span class="text-sm font-medium text-gray-800">SEB bankas</span>
                                </div>
                                <div class="mt-0.5 flex items-center gap-0.5">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="h-3.5 w-3.5 {{ $i < 5 ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-1 text-xs text-gray-500 line-clamp-2">„Stabilumas, profesionalus komanda ir geros karjeros galimybės."</p>
                            </div>
                            <div>
                                <div class="flex items-center gap-1">
                                    <span class="text-sm font-medium text-gray-800">Digital Agency</span>
                                </div>
                                <div class="mt-0.5 flex items-center gap-0.5">
                                    @for($i = 0; $i < 5; $i++)
                                        <svg class="h-3.5 w-3.5 {{ $i < 3 ? 'text-amber-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 24 24"><path d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" /></svg>
                                    @endfor
                                </div>
                                <p class="mt-1 text-xs text-gray-500 line-clamp-2">„Jauna komanda, daug laisvės, bet kartais chaotiškas planavimas."</p>
                            </div>
                        </div>
                        <a href="#" class="mt-3 block text-center text-xs font-medium text-red-600 hover:underline">Visi atsiliepimai →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
