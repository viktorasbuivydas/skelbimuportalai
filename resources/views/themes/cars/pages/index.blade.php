<x-layouts.app title="AutoSkelbimai - Nr. 1 automobilių skelbimų portalas">

    <x-hero />

    <x-stats-section />

    {{-- Listings with tabs --}}
    <section class="py-6 sm:py-8" x-data="{ activeTab: 'popular' }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between border-b border-gray-200">
                <div class="flex gap-0 overflow-x-auto">
                    <button @click="activeTab = 'popular'" :class="activeTab === 'popular' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'" class="whitespace-nowrap border-b-2 px-4 py-3 text-sm font-medium transition">
                        Tarp populiarių
                    </button>
                    <button @click="activeTab = 'new'" :class="activeTab === 'new' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'" class="whitespace-nowrap border-b-2 px-4 py-3 text-sm font-medium transition">
                        Naujai pridėti
                    </button>
                    <button @click="activeTab = 'cheap'" :class="activeTab === 'cheap' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'" class="whitespace-nowrap border-b-2 px-4 py-3 text-sm font-medium transition">
                        Pigiausi
                    </button>
                    <button @click="activeTab = 'expensive'" :class="activeTab === 'expensive' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700'" class="whitespace-nowrap border-b-2 px-4 py-3 text-sm font-medium transition">
                        Brangiausi
                    </button>
                </div>
                <a href="#" class="hidden items-center gap-1 text-sm font-medium text-blue-600 hover:underline sm:flex">
                    Visi skelbimai →
                </a>
            </div>

            {{-- Popular --}}
            <div x-show="activeTab === 'popular'" class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <x-listing-card
                    title="Volkswagen Passat"
                    location="Vilnius"
                    :price="27900"
                    :year="2019"
                    fuel="Dyzelinas"
                    :mileage="95000"
                    transmission="Automatinė"
                    :isFeatured="true"
                    image="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="BMW 520d M Sport"
                    location="Vilnius, Šeškinė"
                    :price="28500"
                    :year="2019"
                    fuel="Dyzelinas"
                    :mileage="95000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Audi A4 Avant"
                    location="Kaunas"
                    :price="19900"
                    :year="2018"
                    fuel="Dyzelinas"
                    :mileage="128000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Mercedes-Benz C220d"
                    location="Klaipėda"
                    :price="31500"
                    :year="2020"
                    fuel="Dyzelinas"
                    :mileage="67000"
                    transmission="Automatinė"
                    :isFeatured="true"
                    image="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Toyota RAV4 Hybrid"
                    location="Vilnius, Pilaitė"
                    :price="34900"
                    :year="2022"
                    fuel="Hibridas"
                    :mileage="32000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Renault Clio"
                    location="Šiauliai"
                    :price="8900"
                    :year="2017"
                    fuel="Benzinas"
                    :mileage="89000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Volvo XC60 T6"
                    location="Kaunas"
                    :price="38900"
                    :year="2021"
                    fuel="Benzinas"
                    :mileage="48000"
                    transmission="Automatinė"
                    badge="Pro"
                    image="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Ford Focus"
                    location="Panevėžys"
                    :price="12500"
                    :year="2018"
                    fuel="Dyzelinas"
                    :mileage="132000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Peugeot 308"
                    location="Vilnius"
                    :price="14200"
                    :year="2019"
                    fuel="Dyzelinas"
                    :mileage="98000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1549317661-bd32c8ce0484?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Hyundai Tucson"
                    location="Vilnius"
                    :price="27500"
                    :year="2022"
                    fuel="Benzinas"
                    :mileage="29000"
                    transmission="Automatinė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=600&q=80"
                />
            </div>

            {{-- New --}}
            <div x-show="activeTab === 'new'" x-cloak class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <x-listing-card
                    title="Škoda Octavia Combi"
                    location="Šiauliai"
                    :price="16500"
                    :year="2019"
                    fuel="Dyzelinas"
                    :mileage="142000"
                    transmission="Mechaninė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1549317661-bd32c8ce0484?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Nissan Qashqai"
                    location="Kaunas"
                    :price="18900"
                    :year="2020"
                    fuel="Benzinas"
                    :mileage="64000"
                    transmission="Automatinė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Kia Sportage"
                    location="Vilnius"
                    :price="24500"
                    :year="2021"
                    fuel="Dyzelinas"
                    :mileage="45000"
                    transmission="Automatinė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Opel Astra"
                    location="Panevėžys"
                    :price="11200"
                    :year="2018"
                    fuel="Dyzelinas"
                    :mileage="115000"
                    transmission="Mechaninė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Tesla Model 3"
                    location="Vilnius"
                    :price="35900"
                    :year="2022"
                    fuel="Elektra"
                    :mileage="18000"
                    transmission="Automatinė"
                    :isNew="true"
                    image="https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&w=600&q=80"
                />
            </div>

            {{-- Cheapest --}}
            <div x-show="activeTab === 'cheap'" x-cloak class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <x-listing-card
                    title="Opel Corsa"
                    location="Šiauliai"
                    :price="2800"
                    :year="2005"
                    fuel="Benzinas"
                    :mileage="198000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="VW Golf IV"
                    location="Kaunas"
                    :price="1990"
                    :year="2002"
                    fuel="Dyzelinas"
                    :mileage="280000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Renault Megane"
                    location="Vilnius"
                    :price="3200"
                    :year="2008"
                    fuel="Dyzelinas"
                    :mileage="215000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Ford Mondeo"
                    location="Panevėžys"
                    :price="3500"
                    :year="2009"
                    fuel="Dyzelinas"
                    :mileage="245000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Peugeot 206"
                    location="Klaipėda"
                    :price="1500"
                    :year="2003"
                    fuel="Benzinas"
                    :mileage="190000"
                    transmission="Mechaninė"
                    image="https://images.unsplash.com/photo-1549317661-bd32c8ce0484?auto=format&fit=crop&w=600&q=80"
                />
            </div>

            {{-- Most Expensive --}}
            <div x-show="activeTab === 'expensive'" x-cloak class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <x-listing-card
                    title="Porsche 911 Carrera"
                    location="Vilnius"
                    :price="125000"
                    :year="2023"
                    fuel="Benzinas"
                    :mileage="8000"
                    transmission="Automatinė"
                    badge="VIP"
                    image="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="BMW M4 Competition"
                    location="Vilnius"
                    :price="89000"
                    :year="2022"
                    fuel="Benzinas"
                    :mileage="15000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Mercedes-Benz GLE 450"
                    location="Kaunas"
                    :price="78500"
                    :year="2023"
                    fuel="Hibridas"
                    :mileage="12000"
                    transmission="Automatinė"
                    :isFeatured="true"
                    image="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Audi RS6 Avant"
                    location="Vilnius"
                    :price="115000"
                    :year="2022"
                    fuel="Benzinas"
                    :mileage="22000"
                    transmission="Automatinė"
                    badge="VIP"
                    image="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=600&q=80"
                />
                <x-listing-card
                    title="Range Rover Sport"
                    location="Vilnius"
                    :price="95000"
                    :year="2023"
                    fuel="Dyzelinas"
                    :mileage="18000"
                    transmission="Automatinė"
                    image="https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=600&q=80"
                />
            </div>

            <div class="mt-5 text-center">
                <a href="#" class="inline-flex items-center gap-1.5 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                    Visi automobilių skelbimai (12 483)
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="border-t border-gray-100 bg-gray-50 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-5 text-lg font-bold text-gray-900">Ieškoti pagal kėbulo tipą</h2>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">
                <x-category-card name="Sedanas" :count="3250" icon="sedan" />
                <x-category-card name="Universalas" :count="2980" icon="wagon" />
                <x-category-card name="Hečbekas" :count="1870" icon="hatchback" />
                <x-category-card name="Visureigis / SUV" :count="2100" icon="suv" />
                <x-category-card name="Pikapas" :count="430" icon="pickup" />
                <x-category-card name="Mikroautobusas" :count="385" icon="van" />
                <x-category-card name="Kupė" :count="245" icon="coupe" />
                <x-category-card name="Kabrioletas" :count="167" icon="convertible" />
            </div>
        </div>
    </section>

    {{-- Popular makes - horizontal scroll strip --}}
    <section class="border-t border-gray-100 py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-5 text-lg font-bold text-gray-900">Populiariausios markės</h2>
            <div class="grid grid-cols-3 gap-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8">
                @foreach(['BMW' => '1 845', 'Audi' => '1 623', 'Volkswagen' => '1 412', 'Mercedes-Benz' => '1 390', 'Toyota' => '987', 'Volvo' => '854', 'Škoda' => '723', 'Hyundai' => '612', 'Kia' => '589', 'Ford' => '534', 'Opel' => '498', 'Renault' => '467', 'Peugeot' => '389', 'Nissan' => '356', 'Mazda' => '312', 'Honda' => '278'] as $make => $count)
                    <a href="#" class="flex flex-col items-center rounded-lg border border-gray-200 bg-white p-3 text-center transition hover:border-blue-300 hover:shadow-sm">
                        <span class="text-sm font-semibold text-gray-900">{{ $make }}</span>
                        <span class="mt-0.5 text-xs text-gray-400">{{ $count }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
