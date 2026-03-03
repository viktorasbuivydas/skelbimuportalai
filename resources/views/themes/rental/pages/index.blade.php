<x-layouts.app title="Skelbimai - Trumpalaikės nuomos portalas Lietuvoje">

    <x-hero />

    <x-stats-section />

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Mėgaukitės poilsiu, privatumu ir namų jaukumu" :centered="true">
            Kodėl rinktis mus?
        </x-section-heading>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card
                icon="search"
                title="Patogi paieška"
                description="Raskite geriausius atostogų būsto pasiūlymus visoje Lietuvoje, atitinkančius jūsų kainos ir komforto kriterijus."
            />
            <x-feature-card
                icon="home"
                title="Namų jaukumas"
                description="Mėgaukitės poilsiu, privatumu ir namų jaukumu pagal savo poreikius, apsistojus privačiuose apartamentuose."
            />
            <x-feature-card
                icon="currency"
                title="Geriausia kaina"
                description="Visi butų nuomos skelbimai patalpinti tiesiogiai iš savininkų, be jokių papildomų komisinių ar mokesčių."
            />
        </div>
    </section>

    {{-- Popular Locations --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Mėgaukitės poilsiu bet kuriame Lietuvos kampelyje" :centered="true">
                Populiarios vietos
            </x-section-heading>

            <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-3 xl:grid-cols-6">
                <x-location-card name="Palanga" image="https://images.unsplash.com/photo-1596397249159-3e73e66e32ae?auto=format&fit=crop&w=600&q=80" :count="180" />
                <x-location-card name="Vilnius" image="https://images.unsplash.com/photo-1565953554309-75e48e8fe3a7?auto=format&fit=crop&w=600&q=80" :count="250" />
                <x-location-card name="Kaunas" image="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" :count="120" />
                <x-location-card name="Neringa" image="https://images.unsplash.com/photo-1499793983394-e58fc2093740?auto=format&fit=crop&w=600&q=80" :count="90" />
                <x-location-card name="Trakai" image="https://images.unsplash.com/photo-1567954970774-58d6aa6c50dc?auto=format&fit=crop&w=600&q=80" :count="45" />
                <x-location-card name="Klaipėda" image="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=600&q=80" :count="95" />
            </div>
        </div>
    </section>

    {{-- Popular Listings --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="flex items-end justify-between">
            <x-section-heading subtitle="Labiausiai vertinami ir populiariausi pasiūlymai">
                Populiariausi skelbimai
            </x-section-heading>
            <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-teal-600 transition hover:text-teal-700 sm:flex">
                Visi skelbimai
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-property-card title="Privatus SPA Jūsų poilsiui" location="Vilnius, Pilaitė" :price="95" :rooms="1" :guests="2" type="Apartamentai" :isFeatured="true" image="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600&q=80" />
            <x-property-card title="Jaukūs apartamentai Žvėryne" location="Vilnius, Žvėrynas" :price="40" :rooms="1" :guests="2" type="Apartamentai" image="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&q=80" />
            <x-property-card title="JACUZZI CINEMA JAPANDI" location="Kaunas, Aleksotas" :price="90" :rooms="3" :guests="2" type="Apartamentai" badge="Pro" image="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80" />
            <x-property-card title="Naujas butas prie ežero su parkingu" location="Vilnius, Pilaitė" :price="49" :rooms="2" :guests="4" type="Apartamentai" :isNew="true" image="https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=600&q=80" />
        </div>

        <div class="mt-8 text-center sm:hidden">
            <x-button variant="outline" size="md">Visi skelbimai</x-button>
        </div>
    </section>

    {{-- New Listings --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <x-section-heading subtitle="Naujausi įkelti pasiūlymai">
                    Naujausi skelbimai
                </x-section-heading>
                <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-teal-600 transition hover:text-teal-700 sm:flex">
                    Visi skelbimai
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-property-card title="Saulėtas studio apartamentas su terasa" location="Neringa, Pervalka" :price="59" :rooms="1" :guests="3" type="Apartamentai" :isNew="true" image="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80" />
                <x-property-card title="Modernus butas Kauno centre" location="Kaunas, Centras" :price="50" :rooms="2" :guests="3" type="Butas" :isNew="true" image="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80" />
                <x-property-card title="Panoraminis butas su vaizdu į bažnyčias" location="Vilnius, Senamiestis" :price="39" :rooms="1" :guests="4" type="Apartamentai" badge="Pro" image="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=600&q=80" />
                <x-property-card title="Boutique apartamentai Kauno širdyje" location="Kaunas, Centras" :price="60" :rooms="2" :guests="4" type="Apartamentai" image="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80" />
            </div>
        </div>
    </section>

    {{-- Property Types --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Pasirinkite tinkamiausią nakvynės tipą" :centered="true">
            Nakvynės tipai
        </x-section-heading>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <x-property-type-card name="Apartamentai" :count="658" icon="building" />
            <x-property-type-card name="Butas" :count="236" icon="building" />
            <x-property-type-card name="Svečių namai" :count="71" icon="hotel" />
            <x-property-type-card name="Vasarnamis" :count="67" icon="cabin" />
            <x-property-type-card name="Namas" :count="64" icon="home" />
            <x-property-type-card name="Sodyba" :count="55" icon="cottage" />
            <x-property-type-card name="Kotedžas" :count="49" icon="home" />
            <x-property-type-card name="Kambarys" :count="24" icon="bed" />
            <x-property-type-card name="Viešbutis" :count="3" icon="hotel" />
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
