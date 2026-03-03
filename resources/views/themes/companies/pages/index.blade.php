<x-layouts.app title="Įmonės.lt - Įmonių katalogas Lietuvoje">

    <x-hero />

    <x-stats-section />

    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row">

            {{-- Category Directory --}}
            <div class="min-w-0 flex-1">
                <div class="grid gap-4 sm:grid-cols-2">
                    <x-category-card
                        name="Auto"
                        :count="5862"
                        icon="car"
                        :subcategories="['Lengvieji automobiliai', 'Krovininiai automobiliai', 'Motociklai, mopedai, dviračiai', 'Automobilių transporto paslaugos', 'Kitos paslaugos, prekyba']"
                    />

                    <x-category-card
                        name="Statyba"
                        :count="10547"
                        icon="building"
                        :subcategories="['Statybiniai įrankiai, technika, įrengimai', 'Projektavimas, architektai', 'Interjeras, baldai', 'Teritorijų ir pastatų priežiūra', 'Komunalinės paslaugos', 'Statybos darbai', 'Statybinės medžiagos, gaminiai']"
                    />

                    <x-category-card
                        name="Grožis"
                        :count="6586"
                        icon="sparkles"
                        :subcategories="['Galanterija', 'Aksesuarai, žaislynės, salonai, parduotuvės', 'Sporto klubai', 'Grožio paslaugos, prekės', 'Papuošalai', 'Kosmetika, parfumerija', 'Modelių agentūros, mokyklos']"
                    />

                    <x-category-card
                        name="Sveikata"
                        :count="2371"
                        icon="heart"
                        :subcategories="['Viešosios ir biudžetinės gydymo įstaigos', 'Higienos įstaigos', 'Privačios gydymo įstaigos', 'Farmacija', 'Medicinos įranga, instrumentai, priemonės', 'Kita su medicina susijusi veikla']"
                    />

                    <x-category-card
                        name="Kitos paslaugos"
                        :count="13478"
                        icon="wrench"
                        :subcategories="['Chemijos pramonė', 'Finansai, verslo konsultacijos, draudimas', 'Lengvoji pramonė', 'Maisto produktai, gėrimai', 'Švietimas, mokslas, kultūra ir menas', 'Žaliavos, kuras, energetika', 'Žiniasklaida, reklama, leidyba', 'Transportas, sandėliavimas, logistika', 'Nekilnojamas turtas, sauga']"
                    />

                    <x-category-card
                        name="Technika info"
                        :count="2336"
                        icon="computer"
                        :subcategories="['Kompiuteriai, įranga, internetas', 'Biuro technika, prekės', 'Buitinė technika, jos remontas', 'Garso, vaizdo technika, remontas', 'Ryšiai, ryšio priemonės, paštas', 'Radio dalys, buitinės technikos dalys', 'Automatika, automatizavimas, prekybos įranga']"
                    />

                    <x-category-card
                        name="Poilsis ir laisvalaikis"
                        :count="3596"
                        icon="sun"
                        :subcategories="['Apgyvendinimo paslaugos', 'Kelionių organizavimas, informavimas', 'Maitinimas', 'Kultūros, laisvalaikio ir kitos įstaigos', 'Transporto paslaugos', 'Kita su turizmu susijusi veikla']"
                    />

                    <x-category-card
                        name="Agro"
                        :count="845"
                        icon="leaf"
                        :subcategories="['Žemės ūkio technika', 'Žemės ūkio produktai', 'Veterinarija', 'Miškininkystė', 'Žuvininkystė, gyvulininkystė']"
                    />
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="hidden w-72 shrink-0 space-y-5 lg:block">
                <div class="rounded-lg border border-gray-200 bg-white p-5">
                    <h3 class="text-sm font-bold text-gray-900">Naujausi straipsniai</h3>
                    <div class="mt-3 space-y-3">
                        <a href="#" class="group block">
                            <div class="text-sm font-medium text-gray-800 group-hover:text-indigo-600">Kaip pasirinkti tinkamą statybų įmonę?</div>
                            <div class="mt-0.5 text-xs text-gray-400">2026-03-01</div>
                        </a>
                        <a href="#" class="group block">
                            <div class="text-sm font-medium text-gray-800 group-hover:text-indigo-600">IT paslaugų rinka Lietuvoje auga</div>
                            <div class="mt-0.5 text-xs text-gray-400">2026-02-27</div>
                        </a>
                        <a href="#" class="group block">
                            <div class="text-sm font-medium text-gray-800 group-hover:text-indigo-600">Naujos grožio paslaugų tendencijos 2026</div>
                            <div class="mt-0.5 text-xs text-gray-400">2026-02-24</div>
                        </a>
                    </div>
                    <a href="#" class="mt-3 inline-block text-xs font-semibold text-indigo-600 hover:underline">Visi straipsniai →</a>
                </div>

                <div class="rounded-lg border border-indigo-200 bg-indigo-50 p-5">
                    <h3 class="text-sm font-bold text-indigo-800">Nerandate savo įmonės?</h3>
                    <p class="mt-2 text-xs leading-relaxed text-indigo-600">Registruokite nemokamai ir būkite matomi tūkstančiams potencialių klientų.</p>
                    <a href="#" class="mt-3 inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-bold text-white transition hover:bg-indigo-700">Registruoti įmonę</a>
                </div>

                <div class="rounded-lg border border-gray-200 bg-white p-5">
                    <h3 class="text-sm font-bold text-gray-900">Populiarūs miestai</h3>
                    <div class="mt-3 flex flex-wrap gap-1.5">
                        @foreach(['Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys', 'Alytus', 'Marijampolė', 'Telšiai'] as $city)
                            <a href="#" class="rounded bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-600 transition hover:bg-indigo-100 hover:text-indigo-700">{{ $city }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-lg border border-gray-200 bg-white p-5">
                    <h3 class="text-sm font-bold text-gray-900">Naujai registruotos</h3>
                    <div class="mt-3 space-y-2.5">
                        @foreach([
                            ['name' => 'UAB "Statybų Meistrai"', 'category' => 'Statyba'],
                            ['name' => 'MB "Digital Solutions"', 'category' => 'IT paslaugos'],
                            ['name' => 'IĮ "Grožio Namai"', 'category' => 'Grožis'],
                            ['name' => 'UAB "TransLogistika"', 'category' => 'Transportas'],
                        ] as $company)
                            <a href="#" class="group block">
                                <div class="text-sm font-medium text-gray-800 group-hover:text-indigo-600">{{ $company['name'] }}</div>
                                <div class="text-xs text-gray-400">{{ $company['category'] }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Popular Companies --}}
    <section class="border-t border-gray-200 bg-white py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-5 flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-900">Populiariausios įmonės</h2>
                <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">Visos →</a>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <x-company-card
                    name="TechVision Solutions"
                    category="IT paslaugos"
                    location="Vilnius"
                    :rating="4.8"
                    :reviewCount="127"
                    :isVerified="true"
                    :isFeatured="true"
                    logo="https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="BuildPro Statyba"
                    category="Statybos"
                    location="Kaunas"
                    :rating="4.6"
                    :reviewCount="89"
                    :isVerified="true"
                    logo="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="MedClinic"
                    category="Medicina"
                    location="Vilnius"
                    :rating="4.9"
                    :reviewCount="215"
                    :isVerified="true"
                    logo="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="Grožio Studija Aura"
                    category="Grožis"
                    location="Klaipėda"
                    :rating="4.7"
                    :reviewCount="163"
                    logo="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=200&q=80"
                />
            </div>
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
