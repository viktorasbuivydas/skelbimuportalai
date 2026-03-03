<x-layouts.app title="Darbas.lt - Darbo skelbimų portalas Lietuvoje">

    <x-hero />

    <x-stats-section />

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Greičiausias kelias prie svajonių karjeros" :centered="true">
            Kodėl rinktis mus?
        </x-section-heading>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card
                icon="search"
                title="Tūkstančiai pasiūlymų"
                description="Kasdien atnaujiname darbo skelbimų bazę, kad galėtumėte rasti geriausią poziciją pagal savo kvalifikaciją ir lūkesčius."
            />
            <x-feature-card
                icon="shield"
                title="Patikimos įmonės"
                description="Bendradarbiaujame tik su patikimomis ir patikrintomis įmonėmis, užtikrinant saugų ir skaidrų įdarbinimo procesą."
            />
            <x-feature-card
                icon="currency"
                title="Konkurencingi atlyginimai"
                description="Pateikiame skelbimus su aiškiai nurodytais atlyginimais, kad galėtumėte lengvai palyginti ir pasirinkti geriausią pasiūlymą."
            />
        </div>
    </section>

    {{-- Popular Jobs --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="flex items-end justify-between">
            <x-section-heading subtitle="Labiausiai ieškomi darbo pasiūlymai">
                Populiariausi skelbimai
            </x-section-heading>
            <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-orange-600 transition hover:text-orange-700 sm:flex">
                Visi skelbimai
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-job-card
                title="Vyresnis(-ė) programuotojas(-a)"
                company="Telia Lietuva"
                location="Vilnius"
                salary="3000-4500 €"
                type="Nuolatinis"
                :isFeatured="true"
                postedDate="Šiandien"
                logo="https://ui-avatars.com/api/?name=Telia&background=6C2BD9&color=fff&size=80"
            />
            <x-job-card
                title="Buhalterė"
                company="SEB bankas"
                location="Vilnius"
                salary="1800-2500 €"
                type="Nuolatinis"
                :isNew="true"
                postedDate="Vakar"
                logo="https://ui-avatars.com/api/?name=SEB&background=60A913&color=fff&size=80"
            />
            <x-job-card
                title="Pardavimų vadybininkas(-ė)"
                company="Maxima LT"
                location="Kaunas"
                salary="1500-2200 €"
                type="Nuolatinis"
                postedDate="Prieš 2 d."
                logo="https://ui-avatars.com/api/?name=Maxima&background=E3000F&color=fff&size=80"
            />
            <x-job-card
                title="UX/UI dizaineris(-ė)"
                company="Vinted"
                location="Vilnius"
                salary="2500-3800 €"
                type="Nuotolinis"
                :isFeatured="true"
                :isNew="true"
                postedDate="Šiandien"
                logo="https://ui-avatars.com/api/?name=Vinted&background=09B1BA&color=fff&size=80"
            />
        </div>

        <div class="mt-8 text-center sm:hidden">
            <x-button variant="outline" size="md" class="border-orange-500! text-orange-600! hover:bg-orange-50!">Visi skelbimai</x-button>
        </div>
    </section>

    {{-- New Jobs --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <x-section-heading subtitle="Naujausi įkelti darbo pasiūlymai">
                    Naujausi skelbimai
                </x-section-heading>
                <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-orange-600 transition hover:text-orange-700 sm:flex">
                    Visi skelbimai
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-job-card
                    title="Projekto vadovas(-ė)"
                    company="Accenture"
                    location="Vilnius"
                    salary="2800-4000 €"
                    type="Nuolatinis"
                    :isNew="true"
                    postedDate="Šiandien"
                    logo="https://ui-avatars.com/api/?name=Accenture&background=A100FF&color=fff&size=80"
                />
                <x-job-card
                    title="Slaugytoja(-s)"
                    company="Santaros klinikos"
                    location="Vilnius"
                    salary="1400-1800 €"
                    type="Nuolatinis"
                    :isNew="true"
                    :isUrgent="true"
                    postedDate="Šiandien"
                    logo="https://ui-avatars.com/api/?name=SK&background=DC2626&color=fff&size=80"
                />
                <x-job-card
                    title="Statybos darbų vadovas"
                    company="YIT Lietuva"
                    location="Kaunas"
                    salary="2200-3200 €"
                    type="Nuolatinis"
                    :isNew="true"
                    postedDate="Vakar"
                    logo="https://ui-avatars.com/api/?name=YIT&background=003DA6&color=fff&size=80"
                />
                <x-job-card
                    title="Rinkodaros specialistas(-ė)"
                    company="Omnisend"
                    location="Vilnius"
                    salary="2000-3000 €"
                    type="Nuotolinis"
                    :isNew="true"
                    postedDate="Šiandien"
                    logo="https://ui-avatars.com/api/?name=Omnisend&background=1E3A5F&color=fff&size=80"
                />
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Ieškokite darbo pagal sritį" :centered="true">
            Darbo kategorijos
        </x-section-heading>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <x-category-card name="IT ir telekomunikacijos" :count="1250" icon="computer" />
            <x-category-card name="Finansai ir apskaita" :count="680" icon="currency" />
            <x-category-card name="Medicina ir sveikatos priežiūra" :count="520" icon="heart" />
            <x-category-card name="Statyba ir inžinerija" :count="470" icon="wrench" />
            <x-category-card name="Transportas ir logistika" :count="390" icon="truck" />
            <x-category-card name="Švietimas ir mokslas" :count="310" icon="academic" />
            <x-category-card name="Prekyba ir aptarnavimas" :count="850" icon="shopping" />
            <x-category-card name="Administravimas" :count="420" icon="briefcase" />
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
