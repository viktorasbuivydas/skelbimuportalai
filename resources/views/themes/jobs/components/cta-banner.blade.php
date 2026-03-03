@props([
    'title' => 'Ieškote darbuotojų?',
    'description' => 'Pasiekite tūkstančius kandidatų. Įkelkite darbo skelbimą ir raskite geriausius specialistus.',
])

<section class="bg-gradient-to-br from-orange-500 to-amber-600">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
        <div class="flex flex-col items-center justify-between gap-8 lg:flex-row">
            <div class="max-w-xl text-center lg:text-left">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    {{ $title }}
                </h2>
                <p class="mt-4 text-lg text-orange-100">
                    {{ $description }}
                </p>
            </div>
            <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
                <x-button variant="white" size="lg">
                    Įdėti skelbimą
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </x-button>
                <x-button variant="outline" size="lg" class="border-white/30! text-white! hover:bg-white/10!">
                    Sužinoti daugiau
                </x-button>
            </div>
        </div>
    </div>
</section>
