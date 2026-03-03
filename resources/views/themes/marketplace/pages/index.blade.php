<x-layouts.app title="Skelbiu - Pirk ir parduok Lietuvoje">

    <x-hero />

    {{-- Category Directory --}}
    <section class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 sm:grid-cols-3 lg:grid-cols-5">
            <x-category-card
                name="Transportas"
                icon="car"
                :subcategories="[
                    'Automobiliai' => 31621,
                    'Moto' => 5763,
                    '(Mikro)autobusai' => 2325,
                    'Dviračiai, paspirtukai' => 17584,
                    'Spec. transportas' => 10129,
                    'Vandens transportas' => 1018,
                    'Dalys, aksesuarai' => 23186,
                    'Paslaugos' => 2344,
                    'Kita' => 116,
                ]"
            />

            <x-category-card
                name="Nekilnojamasis turtas"
                icon="home"
                :subcategories="[
                    'Butai' => 4711,
                    'Namai' => 5692,
                    'Patalpos' => 1715,
                    'Sklypai' => 1721,
                    'Sodybos' => 812,
                    'Garažai' => 603,
                    'Nuoma' => 8024,
                    'Moduliniai namai' => 175,
                    'Medžiagos, įranga' => 23577,
                    'Statybos paslaugos' => 2406,
                    'Kita' => 203,
                ]"
            />

            <x-category-card
                name="Darbas, paslaugos"
                icon="briefcase"
                :subcategories="[
                    'Siūlo darbą' => 9616,
                    'Ieško darbo' => 1963,
                    'Biuro paslaugos' => 144,
                    'Grožio, sveikatos paslaugos' => 211,
                    'Kursai, mokymai' => 202,
                    'Renginių paslaugos' => 2411,
                    'Versio paslaugos' => 362,
                    'Web sprendimai, svetainės' => 38,
                    'Kita' => 407,
                ]"
            />

            <x-category-card
                name="Buitis"
                icon="couch"
                :subcategories="[
                    'Baldai, interjeras' => 53486,
                    'Flora, fauna' => 10412,
                    'Grožis, sveikata' => 7544,
                    'Kolekcionavimas' => 89401,
                    'Maistas, gėrimai' => 1051,
                    'Namų apyvokos reikmenys' => 19068,
                    'Antikvarinės' => 1036,
                    'Dovanojama, radinia' => 11036,
                    'Kietas, skystas kuras' => 1484,
                    'Kita' => 4791,
                ]"
            />

            <x-category-card
                name="Kompiuterija"
                icon="computer"
                :subcategories="[
                    'Kompiuteriai' => 10783,
                    'Išoriniai įrenginiai' => 5376,
                    'Kompiuterių komponentai' => 15648,
                    'Priedai, aksesuarai' => 2222,
                    'Programinė įranga' => 2417,
                    'Tinklo įranga' => 1773,
                    'Paslaugos, remontas' => 265,
                    'Kita' => 1158,
                ]"
            />

            <x-category-card
                name="Komunikacijos"
                icon="phone"
                :subcategories="[
                    'Mobilieji telefonai' => 3569,
                    'Radijo, GPS įranga' => 853,
                    'Telefonai, faksai' => 354,
                    'Dalys, priedai' => 3626,
                    'Paslaugos, remontas' => 51,
                    'Kita' => 367,
                ]"
            />

            <x-category-card
                name="Technika"
                icon="wrench"
                :subcategories="[
                    'Audio' => 9612,
                    'Video' => 5499,
                    'Buitinė technika' => 15691,
                    'Foto, optika' => 5020,
                    'Biuro, prekybinė technika' => 754,
                    'Sodui, daržui, miškui' => 7627,
                    'Pramoninė technika' => 10792,
                    'Paslaugos, remontas' => 382,
                    'Kita' => 4779,
                ]"
            />

            <x-category-card
                name="Pramogos"
                icon="sparkles"
                :subcategories="[
                    'Knygos, kinas' => 31124,
                    'Sportas, žaidimai' => 10844,
                    'Turizmas' => 4324,
                    'Pažintys' => 386,
                    'Medžioklė, žvejyba' => 7777,
                    'Muzika, instrumentai' => 3913,
                    'Pakvietimai, bilietai' => 410,
                    'Svaugusiems' => 574,
                    'Kita' => 167,
                ]"
            />

            <x-category-card
                name="Drabužiai, avalynė"
                icon="shirt"
                :subcategories="[
                    'Moterims' => 21604,
                    'Vyrams' => 3275,
                    'Vaikams' => 85378,
                    'Avalynė' => 13098,
                    'Spec. apranga' => 1447,
                    'Papuošalai, aksesuarai' => 17256,
                    'Paslaugos' => 52,
                    'Kita' => 208,
                ]"
            />

            <x-category-card
                name="Auginantiems vaikus"
                icon="child"
                :subcategories="[
                    'Drabužiai, avalynė' => 11504,
                    'Baldai' => 1758,
                    'Priežiūros priemonės' => 1893,
                    'Vežimėliai, autokėdutės' => 3394,
                    'Judėjimo priemonės' => 1521,
                    'Žaislai, mokyklinės prekės' => 9159,
                    'Paslaugos vaikams' => 17,
                    'Kita' => 134,
                ]"
            />
        </div>
    </section>

    <x-cta-banner />

    {{-- Latest Listings --}}
    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-900">Naujausi skelbimai</h2>
            <a href="#" class="text-sm font-medium text-green-600 hover:underline">Visi skelbimai →</a>
        </div>
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            <x-listing-card
                title="Minkštas kampas Lauksva, su miego funkcija, dėže"
                price="999"
                postedAgo="prieš 43 sek."
                image="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80"
                :isFeatured="true"
            />
            <x-listing-card
                title="Lėkštės, 18cm, 4vnt."
                price="5"
                postedAgo="prieš 2 min."
                image="https://images.unsplash.com/photo-1603199506016-5947d891d03b?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Kompiuterių Sezonų išpardavimas - Viskas Vietoje"
                price="1 090"
                postedAgo="prieš 3 min."
                image="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80"
                :isFeatured="true"
            />
            <x-listing-card
                title="Istorija drevnego Rima ir ne tik"
                price="15"
                postedAgo="prieš 3 min."
                image="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Samsung Galaxy S24 Ultra 256GB"
                price="650"
                postedAgo="prieš 4 min."
                image="https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Naudotas, baterija veikia beveik kaip nauja"
                price="160"
                postedAgo="prieš 3 min."
                image="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Lietuviškos monetos kortelėse"
                price="280"
                postedAgo="prieš 3 min."
                image="https://images.unsplash.com/photo-1605792657660-596af9009e82?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Senoviniai Kalėdų žaisliukai 64 vnt"
                price="40"
                postedAgo="prieš 1 min."
                image="https://images.unsplash.com/photo-1513885535751-8b9238bd345a?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Biliardo lazda profesionali"
                price="30"
                postedAgo="prieš 3 min."
                image="https://images.unsplash.com/photo-1615722539838-fca26ff65828?auto=format&fit=crop&w=400&q=80"
            />
            <x-listing-card
                title="Elektrinė gitara Fender Stratocaster"
                price="420"
                postedAgo="prieš 5 min."
                image="https://images.unsplash.com/photo-1550291652-6ea9114a47b1?auto=format&fit=crop&w=400&q=80"
            />
        </div>
    </section>

</x-layouts.app>
