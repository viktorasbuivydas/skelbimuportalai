<x-layouts.app title="NT Portalas - Nekilnojamojo turto skelbimai Lietuvoje">

    <x-hero />

    <x-stats-section />

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Patikimas nekilnojamojo turto portalas" :centered="true">
            Kodėl rinktis mus?
        </x-section-heading>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card
                icon="search"
                title="Patogi paieška"
                description="Ieškokite pagal vietą, kainą, plotą ir kitus parametrus."
            />
            <x-feature-card
                icon="document"
                title="Tikslūs duomenys"
                description="Detalūs objektų aprašymai su planais ir nuotraukomis."
            />
            <x-feature-card
                icon="chart"
                title="Rinkos kainos"
                description="Skelbimai tiesiogiai iš savininkų ir agentūrų."
            />
        </div>
    </section>

    {{-- Popular Locations --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Raskite nekilnojamąjį turtą populiariausiuose Lietuvos miestuose" :centered="true">
                Populiarios vietos
            </x-section-heading>

            <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-3 xl:grid-cols-6">
                <x-location-card name="Vilnius" image="https://images.unsplash.com/photo-1565953554309-75e48e8fe3a7?auto=format&fit=crop&w=600&q=80" :count="1250" />
                <x-location-card name="Kaunas" image="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" :count="680" />
                <x-location-card name="Klaipėda" image="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=600&q=80" :count="420" />
                <x-location-card name="Šiauliai" image="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=600&q=80" :count="190" />
                <x-location-card name="Panevėžys" image="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80" :count="145" />
                <x-location-card name="Palanga" image="https://images.unsplash.com/photo-1596397249159-3e73e66e32ae?auto=format&fit=crop&w=600&q=80" :count="210" />
            </div>
        </div>
    </section>

    {{-- Popular Listings --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="flex items-end justify-between">
            <x-section-heading subtitle="Labiausiai peržiūrimi nekilnojamojo turto objektai">
                Populiariausi skelbimai
            </x-section-heading>
            <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-emerald-600 transition hover:text-emerald-700 sm:flex">
                Visi skelbimai
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-property-card
                title="3 kambarių butas Šnipiškėse"
                location="Vilnius, Šnipiškės"
                :price="185000"
                :area="65"
                :rooms="3"
                :floor="5"
                :totalFloors="9"
                type="Butas"
                :isFeatured="true"
                image="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600&q=80"
            />
            <x-property-card
                title="Namas su sklypu Pilaitėje"
                location="Vilnius, Pilaitė"
                :price="320000"
                :area="180"
                :rooms="5"
                type="Namas"
                image="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
            />
            <x-property-card
                title="2 kambarių butas Centre"
                location="Kaunas, Centras"
                :price="95000"
                :area="52"
                :rooms="2"
                :floor="3"
                :totalFloors="5"
                type="Butas"
                image="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&q=80"
            />
            <x-property-card
                title="Sklypas prie ežero"
                location="Trakai"
                :price="45000"
                :area="15"
                type="Sklypas"
                badge="Populiarus"
                image="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=600&q=80"
            />
        </div>

        <div class="mt-8 text-center sm:hidden">
            <x-button variant="outline" size="md">Visi skelbimai</x-button>
        </div>
    </section>

    {{-- New Listings --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <x-section-heading subtitle="Naujausi įkelti nekilnojamojo turto objektai">
                    Naujausi skelbimai
                </x-section-heading>
                <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-emerald-600 transition hover:text-emerald-700 sm:flex">
                    Visi skelbimai
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-property-card
                    title="4 kambarių butas Žvėryne"
                    location="Vilnius, Žvėrynas"
                    :price="245000"
                    :area="92"
                    :rooms="4"
                    :floor="2"
                    :totalFloors="5"
                    type="Butas"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80"
                />
                <x-property-card
                    title="Kotedžas Aleksote"
                    location="Kaunas, Aleksotas"
                    :price="198000"
                    :area="140"
                    :rooms="4"
                    type="Namas"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1600607687939-ce8a6c50118c?auto=format&fit=crop&w=600&q=80"
                />
                <x-property-card
                    title="Komercinės patalpos Senamiestyje"
                    location="Vilnius, Senamiestis"
                    :price="175000"
                    :area="85"
                    :floor="1"
                    :totalFloors="3"
                    type="Komercinis"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=600&q=80"
                />
                <x-property-card
                    title="Sklypas Palangoje"
                    location="Palanga"
                    :price="68000"
                    :area="12"
                    type="Sklypas"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80"
                />
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Pasirinkite nekilnojamojo turto tipą" :centered="true">
            NT kategorijos
        </x-section-heading>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <x-category-card name="Butai" :count="1850" icon="building" />
            <x-category-card name="Namai" :count="720" icon="home" />
            <x-category-card name="Sklypai" :count="530" icon="land" />
            <x-category-card name="Komercinės patalpos" :count="310" icon="commercial" />
            <x-category-card name="Garažai" :count="180" icon="garage" />
            <x-category-card name="Sodai" :count="95" icon="garden" />
            <x-category-card name="Patalpos" :count="240" icon="room" />
            <x-category-card name="Žemės ūkio" :count="65" icon="farm" />
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
