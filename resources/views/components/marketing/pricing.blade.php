@props(['id' => 'kainos'])

@php
    $check =
        '<svg class="mt-0.5 h-4 w-4 shrink-0 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>';
    $checkPro =
        '<svg class="mt-0.5 h-4 w-4 shrink-0 text-violet-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>';
@endphp

<section id="{{ $id }}" class="relative border-t border-white/5 py-20 sm:py-28" x-data="{ shown: false }"
    x-intersect.once="shown = true">
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div
            class="absolute left-1/2 top-0 h-[400px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-violet-600/10 blur-[120px]">
        </div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-center gap-2 opacity-0" :class="shown && 'animate-fade-up'"
            style="animation-delay: 0ms">
            <span
                class="inline-flex items-center gap-1.5 rounded-full border border-violet-500/20 bg-violet-500/10 px-3 py-1 text-xs font-medium text-violet-300">
                <span class="h-1 w-1 rounded-full bg-violet-400"></span>
                Kainos
            </span>
        </div>
        <h2 class="text-center text-2xl font-bold tracking-tight text-white opacity-0 sm:text-3xl"
            :class="shown && 'animate-fade-up'" style="animation-delay: 100ms">
            Viena kaina. Viskas įskaičiuota.
        </h2>
        <p class="mx-auto mt-3 max-w-lg text-center text-base text-gray-500 opacity-0"
            :class="shown && 'animate-fade-up'" style="animation-delay: 200ms">
            Be mėnesinių mokesčių. Pirkite vieną kartą, naudokite visada.
        </p>

        <div class="mx-auto mt-14 grid max-w-5xl gap-5 lg:grid-cols-3">
            <div class="rounded-2xl border border-white/5 bg-white/[0.02] p-7 opacity-0"
                :class="shown && 'animate-fade-up'" style="animation-delay: 300ms">
                <h3 class="text-base font-semibold text-white">Starter</h3>
                <p class="mt-1 text-sm text-gray-500">Idėjos validavimui.</p>
                <div class="mt-5">
                    <span class="text-3xl font-bold text-white">&euro;2,990</span>
                </div>
                <ul class="mt-6 space-y-2.5">
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} 1 tema</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Pilnas Laravel
                        kodas</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Admin panelė</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Paieška ir
                        filtravimas</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} 6 mėn.
                        atnaujinimai</li>
                </ul>
                <a href="mailto:info@skelbimuportalai.lt?subject=Skelbimuportalai.lt%20Starter%20planas%20%E2%80%93%20%E2%82%AC2%2C990"
                    class="mt-7 block rounded-xl border border-white/10 py-2.5 text-center text-sm font-semibold text-gray-300 transition hover:border-white/20 hover:bg-white/5 hover:text-white">
                    Pasirinkti
                </a>
            </div>

            <div class="relative rounded-2xl border border-violet-500/30 bg-violet-500/[0.05] p-7 opacity-0 shadow-lg shadow-violet-600/10"
                :class="shown && 'animate-fade-up'" style="animation-delay: 400ms">
                <span
                    class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-violet-600 px-3 py-0.5 text-xs font-semibold text-white">Populiariausias</span>
                <h3 class="text-base font-semibold text-white">Professional</h3>
                <p class="mt-1 text-sm text-gray-400">Rimtam verslui.</p>
                <div class="mt-5">
                    <span class="text-3xl font-bold text-white">&euro;4,490</span>
                </div>
                <ul class="mt-6 space-y-2.5">
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} Visos temos
                        (dabartinės ir būsimos)</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} Pilnas Laravel
                        kodas</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} Stripe mokėjimų
                        integracija</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} Iškelti skelbimai
                        ir monetizacija</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} SEO optimizacija
                    </li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-300">{!! $checkPro !!} 12 mėn.
                        atnaujinimai + palaikymas</li>
                </ul>
                <a href="mailto:info@skelbimuportalai.lt?subject=Skelbimuportalai.lt%20Professional%20planas%20%E2%80%93%20%E2%82%AC4%2C490"
                    class="mt-7 block rounded-xl bg-violet-600 py-2.5 text-center text-sm font-semibold text-white transition hover:bg-violet-500">
                    Pasirinkti
                </a>
            </div>

            <div class="rounded-2xl border border-white/5 bg-white/[0.02] p-7 opacity-0"
                :class="shown && 'animate-fade-up'" style="animation-delay: 500ms">
                <h3 class="text-base font-semibold text-white">Enterprise</h3>
                <p class="mt-1 text-sm text-gray-500">Individualus sprendimas.</p>
                <div class="mt-5">
                    <span class="text-3xl font-bold text-white">Susitarkime</span>
                </div>
                <ul class="mt-6 space-y-2.5">
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Viskas iš
                        Professional</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Individualus
                        dizainas</li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Diegimo pagalba
                    </li>
                    <li class="flex items-start gap-2.5 text-sm text-gray-400">{!! $check !!} Neribotas
                        palaikymas</li>
                </ul>
                <a href="mailto:info@skelbimuportalai.lt?subject=Skelbimuportalai.lt%20Enterprise%20planas%20%E2%80%93%20individualus%20sprendimas"
                    class="mt-7 block rounded-xl border border-white/10 py-2.5 text-center text-sm font-semibold text-gray-300 transition hover:border-white/20 hover:bg-white/5 hover:text-white">
                    Susisiekti
                </a>
            </div>
        </div>
    </div>
</section>
