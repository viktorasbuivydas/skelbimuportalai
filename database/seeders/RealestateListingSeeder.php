<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RealestateListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => '3 kambarių butas Šnipiškėse',
                'description' => 'Parduodamas erdvus 3 kambarių butas Šnipiškėse su vaizdu į miestą. Suremontuotas, šviesi virtuvė su baldais, parketo grindys. Šalia viešasis transportas ir parduotuvės.',
                'price' => 185000.00,
                'location' => 'Vilnius, Šnipiškės',
                'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=600&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(10),
                'meta' => ['area' => '65', 'rooms' => '3', 'floor' => '5', 'total_floors' => '9', 'property_type' => 'Butas', 'heating' => 'Centrinis'],
            ],
            [
                'title' => 'Namas su sklypu Pilaitėje',
                'description' => 'Parduodamas erdvus namas su 10 arų sklypu Pilaitėje. 5 kambariai, 2 vonios kambariai, garažas 2 automobiliams. Sodas ir terasa.',
                'price' => 320000.00,
                'location' => 'Vilnius, Pilaitė',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(30),
                'meta' => ['area' => '180', 'rooms' => '5', 'floor' => '1', 'total_floors' => '2', 'property_type' => 'Namas', 'heating' => 'Dujinis'],
            ],
            [
                'title' => '2 kambarių butas Centre',
                'description' => 'Kompaktiškas 2 kambarių butas Kauno centre. Suremontuotas, su baldais ir buitine technika. Idealiai tinka nuomai ar jaunai šeimai.',
                'price' => 95000.00,
                'location' => 'Kaunas, Centras',
                'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(1),
                'meta' => ['area' => '52', 'rooms' => '2', 'floor' => '3', 'total_floors' => '5', 'property_type' => 'Butas', 'heating' => 'Centrinis'],
            ],
            [
                'title' => 'Sklypas prie ežero',
                'description' => 'Parduodamas 15 arų sklypas prie Galvės ežero. Graži gamtinė aplinka, privažiavimas asfaltuotu keliu. Galimybė statyti namą ar sodybą.',
                'price' => 45000.00,
                'location' => 'Trakai',
                'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(2),
                'meta' => ['area' => '1500', 'rooms' => '0', 'floor' => '0', 'total_floors' => '0', 'property_type' => 'Sklypas', 'heating' => 'Nėra'],
            ],
            [
                'title' => '4 kambarių butas Žvėryne',
                'description' => 'Prabangus 4 kambarių butas prestižiniame Žvėryno rajone. Aukštos lubos, didelės erdvės, balkonas. Renovuotas namas, nauja stogo danga.',
                'price' => 245000.00,
                'location' => 'Vilnius, Žvėrynas',
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(5),
                'meta' => ['area' => '92', 'rooms' => '4', 'floor' => '2', 'total_floors' => '5', 'property_type' => 'Butas', 'heating' => 'Centrinis'],
            ],
            [
                'title' => 'Kotedžas Aleksote',
                'description' => 'Naujos statybos kotedžas Aleksote. 4 kambariai, 2 aukštai, garažas. Ekonomiškas šildymas, šilumos siurblys. Rami ir žalia aplinka.',
                'price' => 198000.00,
                'location' => 'Kaunas, Aleksotas',
                'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'meta' => ['area' => '140', 'rooms' => '4', 'floor' => '1', 'total_floors' => '2', 'property_type' => 'Namas', 'heating' => 'Šilumos siurblys'],
            ],
            [
                'title' => 'Komercinės patalpos Senamiestyje',
                'description' => 'Parduodamos komercinės patalpos Vilniaus senamiestyje. Tinka biurui, kavinei ar parduotuvei. Didelis lankomumas, puiki vieta.',
                'price' => 175000.00,
                'location' => 'Vilnius, Senamiestis',
                'image' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['area' => '85', 'rooms' => '3', 'floor' => '1', 'total_floors' => '3', 'property_type' => 'Komercinis', 'heating' => 'Centrinis'],
            ],
            [
                'title' => 'Sklypas Palangoje',
                'description' => 'Parduodamas 12 arų sklypas Palangoje, ramioje gyvenvietėje. 15 min. pėsčiomis iki jūros. Visi komunikacijos šalia sklypo.',
                'price' => 68000.00,
                'location' => 'Palanga',
                'image' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'meta' => ['area' => '1200', 'rooms' => '0', 'floor' => '0', 'total_floors' => '0', 'property_type' => 'Sklypas', 'heating' => 'Nėra'],
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
