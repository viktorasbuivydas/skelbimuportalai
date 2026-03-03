<x-layouts.app title="Nakvynė.lt - Trumpalaikės nuomos portalas Lietuvoje">

    <x-hero />

    {{-- Category Directory --}}
    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 sm:grid-cols-3 lg:grid-cols-5">
            <x-property-type-card
                name="Trumpalaikė nuoma"
                icon="building"
                :subcategories="[
                    'Apartamentai' => 658,
                    'Studijos' => 142,
                    'Butai' => 236,
                    'Kambariai' => 24,
                    'Namai' => 64,
                    'Kotedžai' => 49,
                    'Svečių namai' => 71,
                    'Kita' => 18,
                ]"
            />

            <x-property-type-card
                name="Nuoma mėnesiui"
                icon="calendar"
                :subcategories="[
                    'Butai' => 1245,
                    'Kambariai' => 386,
                    'Namai' => 178,
                    'Apartamentai' => 92,
                    'Studijos' => 67,
                    'Kita' => 34,
                ]"
            />

            <x-property-type-card
                name="Poilsio namai"
                icon="cabin"
                :subcategories="[
                    'Sodybos' => 55,
                    'Vasarnamiai' => 67,
                    'Namelis gamtoje' => 38,
                    'Kempingas' => 22,
                    'Prie ežero' => 89,
                    'Prie jūros' => 145,
                    'Kaime' => 63,
                    'Kita' => 12,
                ]"
            />

            <x-property-type-card
                name="SPA ir pramogos"
                icon="sparkles"
                :subcategories="[
                    'SPA apartamentai' => 87,
                    'Jacuzzi nakvynė' => 64,
                    'Pirtys, saunos' => 112,
                    'Baseinas' => 45,
                    'Romantiška nakvynė' => 38,
                    'Šeimoms' => 96,
                    'Kita' => 15,
                ]"
            />

            <x-property-type-card
                name="Verslo kelionėms"
                icon="briefcase"
                :subcategories="[
                    'Apartamentai mieste' => 234,
                    'Viešbučiai' => 3,
                    'Prie oro uosto' => 18,
                    'Su darbo vieta' => 67,
                    'Konferencijų salės' => 12,
                    'Parkavimas' => 189,
                    'Kita' => 8,
                ]"
            />
        </div>
    </section>

    <x-cta-banner />

    {{-- Latest Listings --}}
    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-900">Naujausi skelbimai</h2>
            <a href="#" class="text-sm font-medium text-teal-600 hover:underline">Visi skelbimai →</a>
        </div>
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            <x-property-card
                title="Privatus SPA Jūsų poilsiui"
                location="Vilnius, Pilaitė"
                :price="95"
                :rooms="1"
                :guests="2"
                type="Apartamentai"
                postedAgo="prieš 43 sek."
                :isFeatured="true"
                image="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Jaukūs apartamentai Žvėryne"
                location="Vilnius, Žvėrynas"
                :price="40"
                :rooms="1"
                :guests="2"
                type="Apartamentai"
                postedAgo="prieš 2 min."
                image="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="JACUZZI CINEMA JAPANDI"
                location="Kaunas, Aleksotas"
                :price="90"
                :rooms="3"
                :guests="2"
                type="Apartamentai"
                postedAgo="prieš 5 min."
                :isFeatured="true"
                image="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Naujas butas prie ežero su parkingu"
                location="Vilnius, Pilaitė"
                :price="49"
                :rooms="2"
                :guests="4"
                type="Butas"
                postedAgo="prieš 10 min."
                :isNew="true"
                image="https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Saulėtas studio prie jūros"
                location="Palanga, Centras"
                :price="59"
                :rooms="1"
                :guests="3"
                type="Studija"
                postedAgo="prieš 12 min."
                :isNew="true"
                image="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Modernus butas Kauno centre"
                location="Kaunas, Centras"
                :price="50"
                :rooms="2"
                :guests="3"
                type="Butas"
                postedAgo="prieš 15 min."
                image="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Panoraminis butas Senamiestyje"
                location="Vilnius, Senamiestis"
                :price="39"
                :rooms="1"
                :guests="4"
                type="Apartamentai"
                postedAgo="prieš 20 min."
                image="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Boutique apartamentai Kaune"
                location="Kaunas, Centras"
                :price="60"
                :rooms="2"
                :guests="4"
                type="Apartamentai"
                postedAgo="prieš 25 min."
                image="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Sodyba prie ežero su pirtimi"
                location="Molėtai"
                :price="120"
                :rooms="4"
                :guests="8"
                type="Sodyba"
                postedAgo="prieš 30 min."
                image="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=400&q=80"
            />
            <x-property-card
                title="Vasarnamis Neringoje"
                location="Neringa, Pervalka"
                :price="85"
                :rooms="2"
                :guests="5"
                type="Vasarnamis"
                postedAgo="prieš 35 min."
                image="https://images.unsplash.com/photo-1499793983394-e58fc2093740?auto=format&fit=crop&w=400&q=80"
            />
        </div>
    </section>

</x-layouts.app>
