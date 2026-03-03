@props(['id' => 'galimybes'])

<section id="{{ $id }}" class="relative border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }" x-intersect.once="shown = true">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-center gap-2 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 0ms">
            <span class="inline-flex items-center gap-1.5 rounded-full border border-violet-500/20 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-300">
                <span class="h-1 w-1 rounded-full bg-violet-400"></span>
                Galimybės
            </span>
        </div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-white opacity-0 sm:text-3xl" :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
            Viskas, ko reikia katalogui
        </h2>
        <p class="mx-auto mt-3 max-w-lg text-center text-base text-gray-500 opacity-0" :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
            Jokių papildinių ar integravimų. Viskas veikia iš karto.
        </p>

        <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-3" x-ref="grid">
            {{ $slot }}
        </div>
    </div>
</section>
