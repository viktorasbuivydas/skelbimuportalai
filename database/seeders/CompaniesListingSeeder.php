<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompaniesListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => 'TechVision Solutions',
                'description' => 'IT paslaugų įmonė, teikianti programinės įrangos kūrimo, debesų kompiuterijos ir kibernetinio saugumo paslaugas. Dirbame su tarptautiniais klientais nuo 2015 metų.',
                'price' => 0.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=200&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(10),
                'meta' => ['category' => 'IT paslaugos', 'rating' => '4.8', 'review_count' => '127', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'BuildPro Statyba',
                'description' => 'Statybų ir renovacijos įmonė, vykdanti gyvenamųjų ir komercinių pastatų statybos darbus visoje Lietuvoje. Turime daugiau nei 15 metų patirtį.',
                'price' => 0.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(30),
                'meta' => ['category' => 'Statybos', 'rating' => '4.6', 'review_count' => '89', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'MedClinic',
                'description' => 'Privati medicinos klinika, teikianti šeimos gydytojo, odontologijos, dermatologijos ir laboratorinių tyrimų paslaugas. Moderniausia medicinos įranga.',
                'price' => 0.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(1),
                'meta' => ['category' => 'Medicina', 'rating' => '4.9', 'review_count' => '215', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'Grožio Studija Aura',
                'description' => 'Grožio salonas Klaipėdoje, siūlantis kirpimo, dažymo, manikiūro, pedikiūro ir SPA procedūras. Naudojame tik aukščiausios kokybės produktus.',
                'price' => 0.00,
                'location' => 'Klaipėda',
                'image' => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(2),
                'meta' => ['category' => 'Grožis', 'rating' => '4.7', 'review_count' => '163', 'is_verified' => '0', 'logo' => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'UAB Statybų Meistrai',
                'description' => 'Profesionali statybų įmonė, atliekanti vidaus ir išorės apdailos darbus. Specializuojamės renovacijos ir remonto darbuose.',
                'price' => 0.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(5),
                'meta' => ['category' => 'Statyba', 'rating' => '4.3', 'review_count' => '45', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'MB Digital Solutions',
                'description' => 'Skaitmeninių sprendimų įmonė, kurianti svetaines, mobiliąsias aplikacijas ir el. komercijos platformas. Dirbame su mažomis ir vidutinėmis įmonėmis.',
                'price' => 0.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'meta' => ['category' => 'IT paslaugos', 'rating' => '4.5', 'review_count' => '67', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'IĮ Grožio Namai',
                'description' => 'Grožio namai Šiauliuose. Kirpykla, kosmetologė, nagų priežiūra. Draugiška aplinka ir profesionali komanda laukia jūsų.',
                'price' => 0.00,
                'location' => 'Šiauliai',
                'image' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['category' => 'Grožis', 'rating' => '4.4', 'review_count' => '38', 'is_verified' => '0', 'logo' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=200&q=80'],
            ],
            [
                'title' => 'UAB TransLogistika',
                'description' => 'Krovinių pervežimo ir logistikos įmonė. Vykdome pervežimus Lietuvoje ir Europoje. Sandėliavimo paslaugos ir muitinės tarpininkavimas.',
                'price' => 0.00,
                'location' => 'Panevėžys',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=200&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'meta' => ['category' => 'Transportas', 'rating' => '4.2', 'review_count' => '52', 'is_verified' => '1', 'logo' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=200&q=80'],
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
