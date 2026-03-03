<x-layouts.app title="Turgus - Pirk ir parduok Lietuvoje">

    <x-hero />

    <x-stats-section />

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Paprastas ir patogus būdas pirkti ir parduoti" :centered="true">
            Kodėl rinktis mus?
        </x-section-heading>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card
                icon="search"
                title="Patogi paieška"
                description="Raskite tai, ko ieškote, per kelias sekundes. Filtruokite pagal kategoriją, kainą, vietą ir būklę."
            />
            <x-feature-card
                icon="shield"
                title="Saugūs sandoriai"
                description="Pirkėjų ir pardavėjų vertinimo sistema bei saugios komunikacijos priemonės jūsų ramybei."
            />
            <x-feature-card
                icon="currency"
                title="Nemokami skelbimai"
                description="Įkelkite skelbimus visiškai nemokamai. Jokių paslėptų mokesčių ar komisinių – parduokite be rūpesčių."
            />
        </div>
    </section>

    {{-- Popular Listings --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="flex items-end justify-between">
            <x-section-heading subtitle="Daugiausia peržiūrų sulaukę skelbimai">
                Populiariausi skelbimai
            </x-section-heading>
            <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-rose-600 transition hover:text-rose-700 sm:flex">
                Visi skelbimai
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-listing-card
                title="iPhone 15 Pro Max 256GB"
                location="Vilnius"
                :price="899"
                condition="Naudotas"
                category="Elektronika"
                :isFeatured="true"
                sellerName="Jonas P."
                image="https://images.unsplash.com/photo-1695048133142-1a20484d2569?auto=format&fit=crop&w=600&q=80"
            />
            <x-listing-card
                title="Odinė sofa, tamsiai ruda"
                location="Kaunas"
                :price="450"
                condition="Naudotas"
                category="Baldai"
                sellerName="Rūta K."
                image="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=80"
            />
            <x-listing-card
                title="Samsung Galaxy Watch 6"
                location="Klaipėda"
                :price="180"
                condition="Naujas"
                category="Elektronika"
                :isNew="true"
                sellerName="Mindaugas V."
                image="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?auto=format&fit=crop&w=600&q=80"
            />
            <x-listing-card
                title="Dviratis Cube Aim Pro 29"
                location="Vilnius"
                :price="650"
                condition="Naudotas"
                category="Sportas"
                :isFeatured="true"
                :isNew="true"
                sellerName="Tomas R."
                image="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?auto=format&fit=crop&w=600&q=80"
            />
        </div>

        <div class="mt-8 text-center sm:hidden">
            <x-button variant="outline" size="md" class="border-rose-500! text-rose-600! hover:bg-rose-50!">Visi skelbimai</x-button>
        </div>
    </section>

    {{-- New Listings --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <x-section-heading subtitle="Ką tik įkelti skelbimai">
                    Naujausi skelbimai
                </x-section-heading>
                <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-rose-600 transition hover:text-rose-700 sm:flex">
                    Visi skelbimai
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-listing-card
                    title="PlayStation 5 su dviem pultais"
                    location="Vilnius"
                    :price="420"
                    condition="Naudotas"
                    category="Elektronika"
                    :isNew="true"
                    sellerName="Andrius M."
                    image="https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Rašomasis stalas su stalčiais"
                    location="Šiauliai"
                    :price="85"
                    condition="Naudotas"
                    category="Baldai"
                    :isNew="true"
                    sellerName="Eglė S."
                    image="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Nike Air Max 270, 42 dydis"
                    location="Kaunas"
                    :price="75"
                    condition="Naujas"
                    category="Drabužiai"
                    :isNew="true"
                    sellerName="Lukas D."
                    image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Vaikiškas vežimėlis Bugaboo Fox"
                    location="Vilnius"
                    :price="350"
                    condition="Naudotas"
                    category="Vaikams"
                    :isNew="true"
                    sellerName="Ieva B."
                    image="https://images.unsplash.com/photo-1591088398332-8a7791972843?auto=format&fit=crop&w=600&q=80"
                />
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Naršykite pagal kategorijas" :centered="true">
            Populiarios kategorijos
        </x-section-heading>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <x-category-card name="Elektronika" :count="3250" icon="computer" />
            <x-category-card name="Baldai ir interjeras" :count="1840" icon="home" />
            <x-category-card name="Drabužiai ir avalynė" :count="2100" icon="shirt" />
            <x-category-card name="Sportas ir laisvalaikis" :count="980" icon="sport" />
            <x-category-card name="Vaikams" :count="1560" icon="child" />
            <x-category-card name="Auto dalys" :count="870" icon="car" />
            <x-category-card name="Gyvūnai" :count="430" icon="paw" />
            <x-category-card name="Sodas ir daržas" :count="620" icon="leaf" />
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
