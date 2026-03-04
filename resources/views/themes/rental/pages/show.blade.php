<x-layouts.app :title="$listing->title . ' - Nakvynė.lt'">

    @php
        $propertyType = $listing->meta('property_type') ?? 'Apartamentai';
        $rooms = $listing->meta('rooms');
        $area = $listing->meta('area');
        $beds = $listing->meta('beds');
        $guests = $listing->meta('guests');
        $bathrooms = $listing->meta('bathrooms');
        $priceLabel = $listing->meta('price_label') ?? 'naktį';
        $amenitiesRaw = $listing->meta('amenities');
        $amenities = $amenitiesRaw ? explode(',', $amenitiesRaw) : [];
        $hostName = $listing->meta('host_name');
        $hostPhone = $listing->meta('host_phone');
        $checkIn = $listing->meta('check_in') ?? '15:00';
        $checkOut = $listing->meta('check_out') ?? '11:00';
        $minNights = $listing->meta('min_nights') ?? 1;
    @endphp

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="mb-4 text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-teal-600">Trumpalaikė nuoma</a>
            <span class="mx-1">›</span>
            <a href="#" class="hover:text-teal-600">{{ explode(',', $listing->location)[0] ?? $listing->location }}</a>
            <span class="mx-1">›</span>
            <span class="text-gray-900">{{ $propertyType }}</span>
        </nav>

        {{-- Image Gallery --}}
        <div class="relative overflow-hidden rounded-xl" x-data="{ currentImage: 0 }">
            @if($listing->image)
                <img src="{{ $listing->image }}" alt="{{ $listing->title }}" class="h-[280px] w-full object-cover sm:h-[400px] lg:h-[460px]">
                <div class="absolute bottom-4 right-4 flex items-center gap-1.5 rounded-full bg-black/60 px-3 py-1.5 text-xs font-medium text-white backdrop-blur-sm">
                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z" /></svg>
                    1 / 1
                </div>
            @else
                <div class="flex h-[280px] items-center justify-center bg-gray-200 sm:h-[400px] lg:h-[460px]">
                    <svg class="h-20 w-20 text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0 0 22.5 18.75V5.25A2.25 2.25 0 0 0 20.25 3H3.75A2.25 2.25 0 0 0 1.5 5.25v13.5A2.25 2.25 0 0 0 3.75 21Z" /></svg>
                </div>
            @endif
        </div>

        {{-- Title & Location --}}
        <div class="mt-5 flex flex-wrap items-start gap-2">
            <div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                    {{ $listing->location }}
                    @if($listing->is_featured)
                        <span class="rounded bg-amber-400 px-2 py-0.5 text-[10px] font-bold text-amber-900">TOP</span>
                    @endif
                    @if($listing->is_new)
                        <span class="rounded bg-teal-500 px-2 py-0.5 text-[10px] font-bold text-white">NAUJAS</span>
                    @endif
                </div>
                <h1 class="mt-1 text-2xl font-bold text-gray-900 sm:text-3xl">{{ $listing->title }}</h1>
            </div>
        </div>

        {{-- Property Info Bar --}}
        <div class="mt-4 flex flex-wrap items-center gap-x-1 border-b border-gray-200 pb-4 text-sm text-gray-600">
            <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5 font-medium">
                <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                {{ $propertyType }}
            </span>
            @if($rooms)
                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5">
                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" /></svg>
                    {{ $rooms }} kamb.
                </span>
            @endif
            @if($area)
                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5">
                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" /></svg>
                    {{ $area }} m²
                </span>
            @endif
            @if($beds)
                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5">
                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                    {{ $beds }} {{ $beds == 1 ? 'lova' : 'lovos' }}
                </span>
            @endif
            @if($guests)
                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5">
                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    iki {{ $guests }} svečių
                </span>
            @endif
            @if($bathrooms)
                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-3 py-1.5">
                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
                    {{ $bathrooms }} {{ $bathrooms == 1 ? 'vonia' : 'vonios' }}
                </span>
            @endif
        </div>

        {{-- Main two-column layout --}}
        <div class="mt-6 flex flex-col gap-8 lg:flex-row">
            {{-- Main content --}}
            <div class="min-w-0 flex-1">

                {{-- Description --}}
                @if($listing->description)
                    <section>
                        <h2 class="text-lg font-bold text-gray-900">Aprašymas</h2>
                        <div class="mt-3 leading-relaxed text-gray-600" x-data="{ expanded: false }">
                            <div :class="{ 'line-clamp-6': !expanded }">
                                {!! nl2br(e($listing->description)) !!}
                            </div>
                            <button @click="expanded = !expanded" class="mt-2 text-sm font-medium text-teal-600 hover:underline" x-text="expanded ? 'Rodyti mažiau' : 'Skaityti daugiau'"></button>
                        </div>
                    </section>
                @endif

                {{-- Amenities --}}
                @if(count($amenities) > 0)
                    <section class="mt-8 border-t border-gray-200 pt-6">
                        <h2 class="text-lg font-bold text-gray-900">Ypatumai</h2>
                        <div class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">
                            @php
                                $amenityIcons = [
                                    'WiFi' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />',
                                    'TV' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />',
                                    'Parkavimas' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />',
                                    'Kondicionierius' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />',
                                    'Virtuvė' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />',
                                    'Skalbyklė' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />',
                                    'Grilis' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />',
                                    'Internetas' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />',
                                    'Vaikams' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />',
                                ];
                                $defaultIcon = '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />';
                            @endphp
                            @foreach($amenities as $amenity)
                                @php $trimmed = trim($amenity); @endphp
                                <div class="flex items-center gap-2.5 rounded-lg border border-gray-100 bg-gray-50 px-3 py-2.5 text-sm text-gray-700">
                                    <svg class="h-5 w-5 shrink-0 text-teal-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">{!! $amenityIcons[$trimmed] ?? $defaultIcon !!}</svg>
                                    {{ $trimmed }}
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif

                {{-- Rules --}}
                <section class="mt-8 border-t border-gray-200 pt-6" x-data="{ rulesOpen: false }">
                    <button @click="rulesOpen = !rulesOpen" class="flex w-full items-center justify-between text-left">
                        <h2 class="text-lg font-bold text-gray-900">Visos taisyklės</h2>
                        <svg class="h-5 w-5 text-gray-400 transition" :class="{ 'rotate-180': rulesOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                    </button>
                    <div x-show="rulesOpen" x-collapse class="mt-4 space-y-3 text-sm text-gray-600">
                        <div class="flex items-center justify-between rounded-lg bg-gray-50 px-4 py-3">
                            <span>Atvykimas nuo</span>
                            <span class="font-medium text-gray-900">{{ $checkIn }}</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-gray-50 px-4 py-3">
                            <span>Išvykimas iki</span>
                            <span class="font-medium text-gray-900">{{ $checkOut }}</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-gray-50 px-4 py-3">
                            <span>Min. naktų skaičius</span>
                            <span class="font-medium text-gray-900">{{ $minNights }}</span>
                        </div>
                    </div>
                </section>

                {{-- Availability Calendar --}}
                <section class="mt-8 border-t border-gray-200 pt-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-bold text-gray-900">Užimtumo kalendorius</h2>
                        <div class="flex items-center gap-3 text-xs text-gray-500">
                            <span class="flex items-center gap-1"><span class="inline-block h-3 w-3 rounded bg-white border border-gray-300"></span> Laisva</span>
                            <span class="flex items-center gap-1"><span class="inline-block h-3 w-3 rounded bg-gray-300"></span> Užimta</span>
                        </div>
                    </div>
                    <div x-data="calendarWidget()" class="mt-4">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <template x-for="offset in [0, 1]" :key="offset">
                                <div>
                                    <div class="mb-3 flex items-center justify-between">
                                        <button x-show="offset === 0" @click="prevMonth()" class="rounded p-1 text-gray-400 hover:bg-gray-100 hover:text-gray-600">
                                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
                                        </button>
                                        <span x-show="offset === 1"></span>
                                        <span class="text-sm font-semibold text-gray-900" x-text="getMonthName(offset)"></span>
                                        <button x-show="offset === 1" @click="nextMonth()" class="rounded p-1 text-gray-400 hover:bg-gray-100 hover:text-gray-600">
                                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                                        </button>
                                        <span x-show="offset === 0"></span>
                                    </div>
                                    <div class="grid grid-cols-7 gap-1 text-center text-xs">
                                        <template x-for="day in ['Pr', 'An', 'Tr', 'Ke', 'Pe', 'Še', 'Se']" :key="day">
                                            <div class="py-1 font-medium text-gray-400" x-text="day"></div>
                                        </template>
                                        <template x-for="(cell, idx) in getDays(offset)" :key="offset + '-' + idx">
                                            <div
                                                class="flex h-8 items-center justify-center rounded text-xs"
                                                :class="{
                                                    'text-gray-900': cell.current && !cell.booked,
                                                    'bg-gray-200 text-gray-400': cell.booked,
                                                    'text-gray-300': !cell.current,
                                                    'hover:bg-teal-50': cell.current && !cell.booked,
                                                    'font-semibold ring-1 ring-teal-500': cell.today,
                                                }"
                                                x-text="cell.day"
                                            ></div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </section>

                {{-- Contact section --}}
                <section class="mt-8 border-t border-gray-200 pt-6">
                    <h2 class="text-lg font-bold text-gray-900">Jūsų pranešimas</h2>
                    <div class="mt-4 rounded-xl border border-teal-100 bg-teal-50/50 p-5">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-teal-600 text-lg font-bold text-white">
                                {{ $hostName ? mb_substr($hostName, 0, 1) : 'S' }}
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="font-semibold text-gray-900">{{ $hostName ?? 'Savininkas' }}</p>
                                <p class="mt-0.5 text-sm text-gray-500">Kalba: Lietuvių, English</p>
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <button class="inline-flex items-center gap-2 rounded-lg bg-teal-600 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-teal-700">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                                        Rašyti žinutę
                                    </button>
                                    <button class="inline-flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>
                                        Skambinti savininkui
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 flex items-start gap-1.5 text-xs text-gray-400">
                        <svg class="mt-0.5 h-3.5 w-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" /></svg>
                        Saugokitės sukčių! Niekada nesiųskite pinigų nežinomiems asmenims ir nesutikite su neįprastais mokėjimo būdais.
                    </p>
                </section>

                {{-- Map --}}
                <section class="mt-8 border-t border-gray-200 pt-6">
                    <h2 class="text-lg font-bold text-gray-900">Vieta mieste</h2>
                    <div class="mt-4 overflow-hidden rounded-xl border border-gray-200">
                        <div class="relative h-64 bg-gray-100">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="mx-auto h-10 w-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" /></svg>
                                    <p class="mt-2 text-sm text-gray-400">{{ $listing->location }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 border-t border-gray-200 bg-white px-4 py-3 text-sm text-gray-600">
                            <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0 1 15 0Z" /></svg>
                            Adresas: <span class="font-medium text-gray-900">{{ $listing->location }}</span>
                        </div>
                    </div>
                </section>
            </div>

            {{-- Sidebar --}}
            <div class="w-full shrink-0 lg:w-[340px]">
                <div class="lg:sticky lg:top-20">
                    {{-- Price card --}}
                    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <span class="text-3xl font-bold text-gray-900">{{ number_format($listing->price, 0, ',', ' ') }} &euro;</span>
                                <span class="ml-1 text-sm text-gray-500">/ {{ $priceLabel }}</span>
                            </div>
                        </div>

                        @if($listing->meta('price_label'))
                            <div class="mt-2 space-y-1 text-sm text-gray-500">
                                <div class="flex items-center justify-between">
                                    <span>Nuo 3 naktų</span>
                                    <span class="font-medium text-gray-700">{{ number_format($listing->price * 0.9, 0, ',', ' ') }} &euro;</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span>Nuo 7 naktų</span>
                                    <span class="font-medium text-gray-700">{{ number_format($listing->price * 0.8, 0, ',', ' ') }} &euro;</span>
                                </div>
                            </div>
                        @endif

                        <div class="mt-5 grid grid-cols-2 gap-2">
                            <div class="rounded-lg border border-gray-200 px-3 py-2.5">
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400">Atvykimas</label>
                                <input type="date" class="mt-0.5 w-full border-0 p-0 text-sm text-gray-900 focus:ring-0" placeholder="Data">
                            </div>
                            <div class="rounded-lg border border-gray-200 px-3 py-2.5">
                                <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400">Išvykimas</label>
                                <input type="date" class="mt-0.5 w-full border-0 p-0 text-sm text-gray-900 focus:ring-0" placeholder="Data">
                            </div>
                        </div>

                        <button class="mt-4 w-full rounded-lg bg-teal-600 py-3 text-sm font-bold text-white transition hover:bg-teal-700">
                            Rezervuoti
                        </button>

                        <div class="mt-3 flex items-center justify-center gap-4">
                            <button class="inline-flex items-center gap-1.5 text-sm text-gray-500 transition hover:text-red-500">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>
                                Įsiminti
                            </button>
                            <button class="inline-flex items-center gap-1.5 text-sm text-gray-500 transition hover:text-teal-600">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" /></svg>
                                Dalintis
                            </button>
                        </div>
                    </div>

                    {{-- Quick details --}}
                    <div class="mt-4 rounded-xl border border-gray-200 bg-white p-5">
                        <h3 class="text-sm font-bold text-gray-900">Informacija</h3>
                        <div class="mt-3 space-y-2.5">
                            @if($listing->meta('property_type'))
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Tipas</span>
                                    <span class="font-medium text-gray-900">{{ $listing->meta('property_type') }}</span>
                                </div>
                            @endif
                            @if($rooms)
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Kambariai</span>
                                    <span class="font-medium text-gray-900">{{ $rooms }}</span>
                                </div>
                            @endif
                            @if($area)
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Plotas</span>
                                    <span class="font-medium text-gray-900">{{ $area }} m²</span>
                                </div>
                            @endif
                            @if($guests)
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Svečiai</span>
                                    <span class="font-medium text-gray-900">iki {{ $guests }}</span>
                                </div>
                            @endif
                            @if($beds)
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Lovos</span>
                                    <span class="font-medium text-gray-900">{{ $beds }}</span>
                                </div>
                            @endif
                            @if($bathrooms)
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Vonios</span>
                                    <span class="font-medium text-gray-900">{{ $bathrooms }}</span>
                                </div>
                            @endif
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">Paskelbta</span>
                                <span class="font-medium text-gray-900">{{ $listing->published_at?->diffForHumans() }}</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">ID</span>
                                <span class="font-medium text-gray-900">{{ $listing->id }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function calendarWidget() {
            return {
                currentMonth: new Date().getMonth(),
                currentYear: new Date().getFullYear(),
                bookedDays: [5, 6, 12, 13, 14, 20, 21],
                prevMonth() {
                    if (this.currentMonth === 0) {
                        this.currentMonth = 11;
                        this.currentYear--;
                    } else {
                        this.currentMonth--;
                    }
                },
                nextMonth() {
                    if (this.currentMonth === 11) {
                        this.currentMonth = 0;
                        this.currentYear++;
                    } else {
                        this.currentMonth++;
                    }
                },
                getMonthName(offset) {
                    let m = this.currentMonth + offset;
                    let y = this.currentYear;
                    if (m > 11) { m -= 12; y++; }
                    const months = ['Sausis', 'Vasaris', 'Kovas', 'Balandis', 'Gegužė', 'Birželis', 'Liepa', 'Rugpjūtis', 'Rugsėjis', 'Spalis', 'Lapkritis', 'Gruodis'];
                    return months[m] + ' ' + y;
                },
                getDays(offset) {
                    let m = this.currentMonth + offset;
                    let y = this.currentYear;
                    if (m > 11) { m -= 12; y++; }
                    const firstDay = new Date(y, m, 1).getDay();
                    const startDay = firstDay === 0 ? 6 : firstDay - 1;
                    const daysInMonth = new Date(y, m + 1, 0).getDate();
                    const today = new Date();
                    const cells = [];
                    const prevMonthDays = new Date(y, m, 0).getDate();
                    for (let i = startDay - 1; i >= 0; i--) {
                        cells.push({ day: prevMonthDays - i, current: false, booked: false, today: false });
                    }
                    for (let d = 1; d <= daysInMonth; d++) {
                        const isToday = d === today.getDate() && m === today.getMonth() && y === today.getFullYear();
                        cells.push({ day: d, current: true, booked: this.bookedDays.includes(d), today: isToday });
                    }
                    const remaining = 42 - cells.length;
                    for (let d = 1; d <= remaining; d++) {
                        cells.push({ day: d, current: false, booked: false, today: false });
                    }
                    return cells;
                }
            };
        }
    </script>
    @endpush

</x-layouts.app>
