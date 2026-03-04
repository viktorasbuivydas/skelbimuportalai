<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RentalListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => 'Privatus SPA Jūsų poilsiui',
                'description' => 'Prabangūs apartamentai su privačiu SPA ir jacuzzi. Idealiai tinka romantiškai nakvynei ar poilsiui dviese. Rasite pirtį, sūkurinę vonią ir poilsio zoną.',
                'price' => 95.00,
                'location' => 'Vilnius, Pilaitė',
                'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(1),
                'meta' => ['rooms' => '1', 'guests' => '2', 'property_type' => 'Apartamentai', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Jaukūs apartamentai Žvėryne',
                'description' => 'Modernūs ir jaukūs apartamentai ramiame Žvėryno rajone. Visiškai įrengti su visa reikalinga buitine technika. Šalia parkai ir viešasis transportas.',
                'price' => 40.00,
                'location' => 'Vilnius, Žvėrynas',
                'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(5),
                'meta' => ['rooms' => '1', 'guests' => '2', 'property_type' => 'Apartamentai', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'JACUZZI CINEMA JAPANDI',
                'description' => 'Unikali japandi stiliaus erdvė su jacuzzi ir kino kambariu. Puikus pasirinkimas šventėms ar neeiliniam savaitgaliui. Modernūs interjero sprendimai.',
                'price' => 90.00,
                'location' => 'Kaunas, Aleksotas',
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(10),
                'meta' => ['rooms' => '3', 'guests' => '2', 'property_type' => 'Apartamentai', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Naujas butas prie ežero su parkingu',
                'description' => 'Visiškai naujas butas su vaizdu į ežerą. Nemokamas parkavimas, balkonas. Tinka šeimoms ar draugų kompanijai. Ramioje aplinkoje.',
                'price' => 49.00,
                'location' => 'Vilnius, Pilaitė',
                'image' => 'https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(15),
                'meta' => ['rooms' => '2', 'guests' => '4', 'property_type' => 'Butas', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Saulėtas studio prie jūros',
                'description' => 'Kompaktiškas studijos tipo butas vos kelių minučių atstumu nuo jūros. Saulėtas balkonas, moderni virtuvė ir miegamoji zona.',
                'price' => 59.00,
                'location' => 'Palanga, Centras',
                'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['rooms' => '1', 'guests' => '3', 'property_type' => 'Studija', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Modernus butas Kauno centre',
                'description' => 'Stilingas butas pačiame Kauno centre. Šalia Laisvės alėja, restranai ir pramogos. Puikus pasirinkimas trumpam vizitui.',
                'price' => 50.00,
                'location' => 'Kaunas, Centras',
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'meta' => ['rooms' => '2', 'guests' => '3', 'property_type' => 'Butas', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Panoraminis butas Senamiestyje',
                'description' => 'Butas su panoraminiu vaizdu į Vilniaus senamiestį. Istorinė aplinka, unikali atmosfera. Visiškai įrengtas su modernia virtuve.',
                'price' => 39.00,
                'location' => 'Vilnius, Senamiestis',
                'image' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(4),
                'meta' => ['rooms' => '1', 'guests' => '4', 'property_type' => 'Apartamentai', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Boutique apartamentai Kaune',
                'description' => 'Išskirtinio dizaino boutique apartamentai su aukščiausios kokybės baldais ir interjeru. Idealiai tinka verslo kelionėms.',
                'price' => 60.00,
                'location' => 'Kaunas, Centras',
                'image' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(5),
                'meta' => ['rooms' => '2', 'guests' => '4', 'property_type' => 'Apartamentai', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Sodyba prie ežero su pirtimi',
                'description' => 'Erdvi sodyba prie ežero su pirtimi ir lauko terasa. Galimybė naudotis valtimis ir žvejybos įranga. Tinka didelėms kompanijoms.',
                'price' => 120.00,
                'location' => 'Molėtai',
                'image' => 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(6),
                'meta' => ['rooms' => '4', 'guests' => '8', 'property_type' => 'Sodyba', 'price_label' => 'naktis'],
            ],
            [
                'title' => 'Vasarnamis Neringoje',
                'description' => 'Jaukus vasarnamis Pervalkoje, netoli Kuršių marių. Rami aplinka, idealiai tinka šeimos poilsiui. Privatus kiemas su lauko baldais.',
                'price' => 85.00,
                'location' => 'Neringa, Pervalka',
                'image' => 'https://images.unsplash.com/photo-1499793983394-e58fc2093740?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(7),
                'meta' => ['rooms' => '2', 'guests' => '5', 'property_type' => 'Vasarnamis', 'price_label' => 'naktis'],
            ],
        ];

        foreach ($listings as $data) {
            $meta = $data['meta'];
            unset($data['meta']);

            $data['slug'] = Str::slug($data['title']);

            $listing = Listing::query()->create($data);

            foreach ($meta as $key => $value) {
                $listing->listingMeta()->create([
                    'meta_key' => $key,
                    'meta_value' => $value,
                ]);
            }
        }
    }
}
