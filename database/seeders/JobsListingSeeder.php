<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobsListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => 'Vyresnysis PHP programuotojas',
                'description' => 'Ieškome patyrusio PHP programuotojo darbui su Laravel framework. Reikalinga patirtis su REST API, duomenų bazėmis ir automatizuotu testavimu. Siūlome lankstų darbo grafiką ir galimybę dirbti nuotoliniu būdu.',
                'price' => 4250.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=TS&background=dc2626&color=fff&size=200',
                'is_featured' => true,
                'published_at' => now()->subMinutes(10),
                'meta' => ['company' => 'UAB Technologijų Sprendimai', 'salary' => '3 500 – 5 000 €', 'work_mode' => 'Hibridinis', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=TS&background=dc2626&color=fff&size=80'],
            ],
            [
                'title' => 'Finansų analitikas',
                'description' => 'SEB bankas ieško finansų analitiko. Pagrindinės užduotys: finansinių duomenų analizė, ataskaitų rengimas, rizikos vertinimas. Reikalingas aukštasis ekonominis išsilavinimas.',
                'price' => 3000.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=SEB&background=2563eb&color=fff&size=200',
                'is_featured' => true,
                'published_at' => now()->subMinutes(30),
                'meta' => ['company' => 'AB SEB bankas', 'salary' => '2 500 – 3 500 €', 'work_mode' => 'Biure', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=SEB&background=2563eb&color=fff&size=80'],
            ],
            [
                'title' => 'Projektų vadovas',
                'description' => 'Statybų grupė ieško projektų vadovo statybos projektams valdyti. Patirtis statybų sektoriuje būtų privalumas. Siūlome konkurencingą atlyginimą ir tarnybinį automobilį.',
                'price' => 3400.00,
                'location' => 'Kaunas',
                'image' => 'https://ui-avatars.com/api/?name=SG&background=16a34a&color=fff&size=200',
                'is_featured' => true,
                'published_at' => now()->subHours(1),
                'meta' => ['company' => 'UAB Statybų Grupė', 'salary' => '2 800 – 4 000 €', 'work_mode' => 'Biure', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=SG&background=16a34a&color=fff&size=80'],
            ],
            [
                'title' => 'React programuotojas',
                'description' => 'Ieškome React programuotojo nuotoliniam darbui. Patirtis su TypeScript, Next.js ir moderniomis frontend technologijomis. Galimybė dirbti pilnai nuotoliniu būdu.',
                'price' => 3750.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=DA&background=7c3aed&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subHours(2),
                'meta' => ['company' => 'UAB Digital Agency', 'salary' => '3 000 – 4 500 €', 'work_mode' => 'Nuotolinis', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=DA&background=7c3aed&color=fff&size=80'],
            ],
            [
                'title' => 'Pardavimų vadybininkas',
                'description' => 'Baltic Trade ieško pardavimų vadybininko Klaipėdos regione. Pagrindinės užduotys: klientų paieška, pardavimų plano vykdymas, santykių su klientais palaikymas.',
                'price' => 2150.00,
                'location' => 'Klaipėda',
                'image' => 'https://ui-avatars.com/api/?name=BT&background=0891b2&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subHours(3),
                'meta' => ['company' => 'UAB Baltic Trade', 'salary' => '1 500 – 2 800 €', 'work_mode' => 'Biure', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=BT&background=0891b2&color=fff&size=80'],
            ],
            [
                'title' => 'Buhalterė (-is)',
                'description' => 'Apskaitos centras ieško buhalterio. Pagrindinės užduotys: buhalterinė apskaita, PVM deklaracijos, darbo užmokesčio skaičiavimas. Reikalinga patirtis su apskaitos programomis.',
                'price' => 2100.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=AC&background=ca8a04&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subHours(5),
                'meta' => ['company' => 'UAB Apskaitos Centras', 'salary' => '1 800 – 2 400 €', 'work_mode' => 'Hibridinis', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=AC&background=ca8a04&color=fff&size=80'],
            ],
            [
                'title' => 'Marketingo specialistas',
                'description' => 'Media House ieško marketingo specialisto. Reikalinga patirtis su socialinių tinklų valdymu, SEO, Google Ads ir turinio kūrimu. Galimybė dirbti nuotoliniu būdu.',
                'price' => 2050.00,
                'location' => 'Kaunas',
                'image' => 'https://ui-avatars.com/api/?name=MH&background=e11d48&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'meta' => ['company' => 'UAB Media House', 'salary' => '1 600 – 2 500 €', 'work_mode' => 'Nuotolinis', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=MH&background=e11d48&color=fff&size=80'],
            ],
            [
                'title' => 'Sistemos administratorius',
                'description' => 'IT Solutions ieško sistemos administratoriaus. Pagrindinės užduotys: serverių administravimas, tinklo infrastruktūros priežiūra, incidentų valdymas. Reikalinga patirtis su Linux ir Windows serveriais.',
                'price' => 2700.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=IT&background=1d4ed8&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['company' => 'UAB IT Solutions', 'salary' => '2 200 – 3 200 €', 'work_mode' => 'Biure', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=IT&background=1d4ed8&color=fff&size=80'],
            ],
            [
                'title' => 'Sandėlio darbuotojas',
                'description' => 'Logistikos centras ieško sandėlio darbuotojo. Pagrindinės užduotys: prekių priėmimas, pakavimas ir siuntimas. Darbas pamainomis. Patirtis su sandėlio įranga būtų privalumas.',
                'price' => 1400.00,
                'location' => 'Kaunas',
                'image' => 'https://ui-avatars.com/api/?name=LC&background=ea580c&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'meta' => ['company' => 'UAB Logistikos Centras', 'salary' => '1 200 – 1 600 €', 'work_mode' => 'Biure', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=LC&background=ea580c&color=fff&size=80'],
            ],
            [
                'title' => 'Teisininkas (-ė)',
                'description' => 'Advokatų kontora Legalis ieško teisininko. Pagrindinės sritys: civilinė teisė, darbo teisė, sutarčių rengimas. Reikalingas teisės magistro laipsnis ir ne mažesnė nei 2 metų patirtis.',
                'price' => 3250.00,
                'location' => 'Vilnius',
                'image' => 'https://ui-avatars.com/api/?name=AL&background=4338ca&color=fff&size=200',
                'is_featured' => false,
                'published_at' => now()->subDays(4),
                'meta' => ['company' => 'Advokatų kontora Legalis', 'salary' => '2 500 – 4 000 €', 'work_mode' => 'Hibridinis', 'job_type' => 'Nuolatinis', 'logo' => 'https://ui-avatars.com/api/?name=AL&background=4338ca&color=fff&size=80'],
            ],
        ];

        foreach ($listings as $data) {
            $meta = $data['meta'];
            unset($data['meta']);

            $data['slug'] = Str::slug($data['title']);

            $listing = Listing::query()->updateOrCreate(
                ['slug' => $data['slug']],
                $data,
            );

            foreach ($meta as $key => $value) {
                $listing->listingMeta()->updateOrCreate(
                    ['meta_key' => $key],
                    ['meta_value' => $value],
                );
            }
        }
    }
}
