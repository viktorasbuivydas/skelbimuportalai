<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MarketplaceListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => 'Minkštas kampas Lauksva, su miego funkcija, dėže',
                'description' => 'Parduodamas minkštas kampas Lauksva su miego funkcija ir patalynės dėže. Pilka spalva, audinys. Matmenys: 280x200 cm. Labai geros būklės, naudotas vos metus.',
                'price' => 999.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(1),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Samsung Galaxy S24 Ultra 256GB',
                'description' => 'Parduodu Samsung Galaxy S24 Ultra 256GB juodos spalvos. Telefonas idealios būklės, naudotas 3 mėnesius. Komplekte: dėžutė, kroviklis, apsauginis stikliukas.',
                'price' => 650.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(5),
                'meta' => ['condition' => 'Beveik naujas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Kompiuterių Sezonų išpardavimas',
                'description' => 'Nauji ir naudoti kompiuteriai, nešiojami kompiuteriai, monitoriai. Didelės nuolaidos iki 50%. Garantija iki 2 metų. Pristatymas visoje Lietuvoje.',
                'price' => 1090.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(10),
                'meta' => ['condition' => 'Naujas', 'seller' => 'Parduotuvė'],
            ],
            [
                'title' => 'MacBook Pro 14" M3 naudotas',
                'description' => 'Parduodamas MacBook Pro 14" su M3 procesoriumi, 16GB RAM, 512GB SSD. Baterija veikia beveik kaip nauja. Komplekte kroviklis ir dėklas.',
                'price' => 160.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(20),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Elektrinė gitara Fender Stratocaster',
                'description' => 'Parduodu Fender Stratocaster elektrinę gitarą. Made in Mexico, 2020 metų. Sunburst spalva. Komplekte minkštas dėklas ir dirželis.',
                'price' => 420.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1550291652-6ea9114a47b1?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(1),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Lietuviškos monetos kortelėse',
                'description' => 'Parduodu kolekcinių lietuviškų monetų rinkinį kortelėse. 15 monetų nuo 1925 iki 1938 metų. Labai geros būklės.',
                'price' => 280.00,
                'location' => 'Šiauliai',
                'image' => 'https://images.unsplash.com/photo-1605792657660-596af9009e82?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(2),
                'meta' => ['condition' => 'Geras', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Biliardo lazda profesionali',
                'description' => 'Profesionali biliardo lazda su dėklu. Dviejų dalių, klevo mediena. Ilgis 147 cm. Tinka pažengusiems žaidėjams.',
                'price' => 30.00,
                'location' => 'Klaipėda',
                'image' => 'https://images.unsplash.com/photo-1615722539838-fca26ff65828?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(3),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Lėkštės, 18cm, 4vnt.',
                'description' => 'Parduodu 4 vnt. porcelianines lėkštes, 18 cm skersmens. Baltos spalvos su auksiniu apvadu. Nenaudotos, originalioje pakuotėje.',
                'price' => 5.00,
                'location' => 'Panevėžys',
                'image' => 'https://images.unsplash.com/photo-1603199506016-5947d891d03b?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(4),
                'meta' => ['condition' => 'Naujas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Senoviniai Kalėdų žaisliukai 64 vnt',
                'description' => 'Parduodu seną Kalėdų žaisliukų kolekciją - 64 vnt. Stikliniai, rankomis dažyti. Gaminti sovietiniais laikais. Kolekcinė vertė.',
                'price' => 40.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1513885535751-8b9238bd345a?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
            ],
            [
                'title' => 'Istorija drevnego Rima ir ne tik',
                'description' => 'Knyga apie senovės Romos istoriją. Kietas viršelis, geros būklės. Rusų kalba, 450 puslapių su iliustracijomis.',
                'price' => 15.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=400&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['condition' => 'Naudotas', 'seller' => 'Privatus asmuo'],
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
