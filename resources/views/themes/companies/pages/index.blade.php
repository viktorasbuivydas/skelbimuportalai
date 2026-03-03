<x-layouts.app title="Įmonės - Įmonių katalogas Lietuvoje">

    <x-hero />

    <x-stats-section />

    {{-- Features --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Patikimas būdas rasti paslaugų teikėjus ir verslo partnerius" :centered="true">
            Kodėl rinktis mus?
        </x-section-heading>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card
                icon="search"
                title="Patogi paieška"
                description="Raskite reikiamą įmonę pagal pavadinimą, kategoriją ar miestą per kelias sekundes."
            />
            <x-feature-card
                icon="shield"
                title="Patikrintos įmonės"
                description="Visos registruotos įmonės yra patikrintos ir patvirtintos, kad galėtumėte rinktis drąsiai."
            />
            <x-feature-card
                icon="star"
                title="Tikri atsiliepimai"
                description="Skaitykite tikrus klientų atsiliepimus ir reitingus, kad priimtumėte geriausią sprendimą."
            />
        </div>
    </section>

    {{-- Popular Companies --}}
    <section class="bg-gray-50/50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <x-section-heading subtitle="Aukščiausiai vertinamos ir populiariausios įmonės">
                    Populiariausios įmonės
                </x-section-heading>
                <a href="#" class="mb-10 hidden items-center gap-1 text-sm font-semibold text-indigo-600 transition hover:text-indigo-700 sm:flex">
                    Visos įmonės
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <x-company-card
                    name="TechVision Solutions"
                    category="IT paslaugos"
                    location="Vilnius, Šnipiškės"
                    :rating="4.8"
                    :reviewCount="127"
                    description="Programinės įrangos kūrimas, IT konsultacijos ir skaitmeninės transformacijos sprendimai verslui."
                    :isVerified="true"
                    :isFeatured="true"
                    logo="https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="BuildPro Statyba"
                    category="Statybos"
                    location="Kaunas, Centras"
                    :rating="4.6"
                    :reviewCount="89"
                    description="Statybos ir renovacijos darbai, individualių namų projektavimas ir statyba nuo pamatų iki rakto."
                    :isVerified="true"
                    logo="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="MedClinic Sveikatos Centras"
                    category="Medicina"
                    location="Vilnius, Antakalnis"
                    :rating="4.9"
                    :reviewCount="215"
                    description="Šeimos medicinos klinika teikianti diagnostikos, gydymo ir profilaktikos paslaugas."
                    :isVerified="true"
                    logo="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=200&q=80"
                />
                <x-company-card
                    name="Grožio Studija Aura"
                    category="Grožis"
                    location="Klaipėda, Centras"
                    :rating="4.7"
                    :reviewCount="163"
                    description="Plaukų priežiūra, makiažas, nagų dizainas ir kitos grožio paslaugos profesionalų komandos."
                    logo="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=200&q=80"
                />
            </div>

            <div class="mt-8 text-center sm:hidden">
                <x-button variant="outline" size="md" class="border-indigo-500! text-indigo-600! hover:bg-indigo-50! focus:ring-indigo-500!">Visos įmonės</x-button>
            </div>
        </div>
    </section>

    {{-- Categories --}}
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <x-section-heading subtitle="Raskite paslaugų teikėjus pagal veiklos sritį" :centered="true">
            Kategorijos
        </x-section-heading>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <x-category-card name="Statybos" :count="420" icon="building" />
            <x-category-card name="IT paslaugos" :count="385" icon="computer" />
            <x-category-card name="Medicina" :count="290" icon="heart" />
            <x-category-card name="Švietimas" :count="175" icon="academic" />
            <x-category-card name="Transportas" :count="230" icon="truck" />
            <x-category-card name="Maitinimas" :count="310" icon="cake" />
            <x-category-card name="Grožis" :count="265" icon="sparkles" />
            <x-category-card name="Teisė" :count="145" icon="scale" />
        </div>
    </section>

    <x-cta-banner />

</x-layouts.app>
