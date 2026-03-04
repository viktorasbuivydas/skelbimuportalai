<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThemeInstallSeeder extends Seeder
{
    public function run(): void
    {
        $theme = config('theme.active');

        $seederClass = match ($theme) {
            'rental' => RentalListingSeeder::class,
            'cars' => CarsListingSeeder::class,
            'jobs' => JobsListingSeeder::class,
            'companies' => CompaniesListingSeeder::class,
            'marketplace' => MarketplaceListingSeeder::class,
            'realestate' => RealestateListingSeeder::class,
            default => null,
        };

        if ($seederClass) {
            $this->call($seederClass);
        }
    }
}
