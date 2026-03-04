<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarsListingSeeder extends Seeder
{
    public function run(): void
    {
        $listings = [
            [
                'title' => 'Volkswagen Passat',
                'description' => 'Volkswagen Passat B8, 2.0 TDI, automatinė pavarų dėžė. Pilna serviso istorija, vienas savininkas. Labai gera būklė, prižiūrėtas automobilis.',
                'price' => 27900.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=600&q=80',
                'is_featured' => true,
                'published_at' => now()->subMinutes(5),
                'meta' => ['year' => '2019', 'fuel' => 'Dyzelinas', 'mileage' => '95000', 'transmission' => 'Automatinė', 'body_type' => 'Universalas', 'engine_volume' => '2.0'],
            ],
            [
                'title' => 'BMW 520d M Sport',
                'description' => 'BMW 520d su M Sport paketu. Oda, navigacija, LED žibintai, adaptyvinis tempomat. Automobilis be dažymo, originalios ridos.',
                'price' => 28500.00,
                'location' => 'Vilnius, Šeškinė',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(15),
                'meta' => ['year' => '2019', 'fuel' => 'Dyzelinas', 'mileage' => '95000', 'transmission' => 'Automatinė', 'body_type' => 'Sedanas', 'engine_volume' => '2.0'],
            ],
            [
                'title' => 'Audi A4 Avant',
                'description' => 'Audi A4 Avant 2.0 TDI, S-tronic. Virtual cockpit, MMI navigacija, LED priekiniai žibintai. Reguliari techninė priežiūra.',
                'price' => 19900.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subMinutes(30),
                'meta' => ['year' => '2018', 'fuel' => 'Dyzelinas', 'mileage' => '128000', 'transmission' => 'Automatinė', 'body_type' => 'Universalas', 'engine_volume' => '2.0'],
            ],
            [
                'title' => 'Mercedes-Benz C220d',
                'description' => 'Mercedes-Benz C220d AMG Line. Panoraminis stogas, Burmester garso sistema, pilnas saugos paketas. Idealios būklės.',
                'price' => 31500.00,
                'location' => 'Klaipėda',
                'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=600&q=80',
                'is_featured' => true,
                'published_at' => now()->subHours(1),
                'meta' => ['year' => '2020', 'fuel' => 'Dyzelinas', 'mileage' => '67000', 'transmission' => 'Automatinė', 'body_type' => 'Sedanas', 'engine_volume' => '2.0'],
            ],
            [
                'title' => 'Toyota RAV4 Hybrid',
                'description' => 'Toyota RAV4 2.5 Hybrid AWD. Automatinė pavarų dėžė, visų ratų pavara. Ekonomiškas ir patikimas automobilis su gamintojo garantija.',
                'price' => 34900.00,
                'location' => 'Vilnius, Pilaitė',
                'image' => 'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(2),
                'meta' => ['year' => '2022', 'fuel' => 'Hibridas', 'mileage' => '32000', 'transmission' => 'Automatinė', 'body_type' => 'Visureigis / SUV', 'engine_volume' => '2.5'],
            ],
            [
                'title' => 'Renault Clio',
                'description' => 'Renault Clio 1.2 benzinas, mechaninė pavarų dėžė. Ekonomiškas miesto automobilis su maža rida. Puikiai tinka pirmam automobiliui.',
                'price' => 8900.00,
                'location' => 'Šiauliai',
                'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(3),
                'meta' => ['year' => '2017', 'fuel' => 'Benzinas', 'mileage' => '89000', 'transmission' => 'Mechaninė', 'body_type' => 'Hečbekas', 'engine_volume' => '1.2'],
            ],
            [
                'title' => 'Volvo XC60 T6',
                'description' => 'Volvo XC60 T6 AWD Inscription. Bowers & Wilkins garso sistema, pilnas saugos paketas, adaptyvinis tempomat. Premium klasės automobilis.',
                'price' => 38900.00,
                'location' => 'Kaunas',
                'image' => 'https://images.unsplash.com/photo-1619767886558-efdc259cde1a?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subHours(5),
                'meta' => ['year' => '2021', 'fuel' => 'Benzinas', 'mileage' => '48000', 'transmission' => 'Automatinė', 'body_type' => 'Visureigis / SUV', 'engine_volume' => '2.0'],
            ],
            [
                'title' => 'Ford Focus',
                'description' => 'Ford Focus 1.5 TDCi, mechaninė pavarų dėžė. Ekonomiškas ir patikimas automobilis. Tinka kasdieniams važinėjimams.',
                'price' => 12500.00,
                'location' => 'Panevėžys',
                'image' => 'https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'meta' => ['year' => '2018', 'fuel' => 'Dyzelinas', 'mileage' => '132000', 'transmission' => 'Mechaninė', 'body_type' => 'Hečbekas', 'engine_volume' => '1.5'],
            ],
            [
                'title' => 'Peugeot 308',
                'description' => 'Peugeot 308 1.5 BlueHDi, automatinė pavarų dėžė. I-Cockpit prietaisų skydelis, navigacija, parkavimo asistentai.',
                'price' => 14200.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0484?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
                'meta' => ['year' => '2019', 'fuel' => 'Dyzelinas', 'mileage' => '98000', 'transmission' => 'Automatinė', 'body_type' => 'Hečbekas', 'engine_volume' => '1.5'],
            ],
            [
                'title' => 'Hyundai Tucson',
                'description' => 'Hyundai Tucson 1.6 T-GDi, automatinė pavarų dėžė. Modernaus dizaino visureigis su gamintojo garantija. Pilna komplektacija.',
                'price' => 27500.00,
                'location' => 'Vilnius',
                'image' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=600&q=80',
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'meta' => ['year' => '2022', 'fuel' => 'Benzinas', 'mileage' => '29000', 'transmission' => 'Automatinė', 'body_type' => 'Visureigis / SUV', 'engine_volume' => '1.6'],
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
