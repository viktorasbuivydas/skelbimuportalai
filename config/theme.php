<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Active Theme
    |--------------------------------------------------------------------------
    */

    'active' => env('THEME', 'rental'),

    /*
    |--------------------------------------------------------------------------
    | Available Modules
    |--------------------------------------------------------------------------
    |
    | Each module maps to a theme directory inside resources/views/themes/.
    | Toggle "enabled" to control which modules are registered as demo routes
    | and shown in the marketing theme showcase. The "path" is relative to
    | resources/views/themes/. The "meta_fields" array defines theme-specific
    | listing attributes stored in the listing_meta table.
    |
    */

    'modules' => [
        'rental' => [
            'enabled' => true,
            'path' => 'themes/rental',
            'meta_fields' => [
                'rooms' => ['type' => 'integer', 'label' => 'Kambariai'],
                'guests' => ['type' => 'integer', 'label' => 'Svečiai'],
                'property_type' => ['type' => 'string', 'label' => 'Tipas'],
                'price_label' => ['type' => 'string', 'label' => 'Kainos tipas'],
                'area' => ['type' => 'integer', 'label' => 'Plotas (m²)'],
                'beds' => ['type' => 'integer', 'label' => 'Lovos'],
                'bathrooms' => ['type' => 'integer', 'label' => 'Vonios'],
                'amenities' => ['type' => 'string', 'label' => 'Patogumai'],
                'check_in' => ['type' => 'string', 'label' => 'Atvykimas'],
                'check_out' => ['type' => 'string', 'label' => 'Išvykimas'],
                'min_nights' => ['type' => 'integer', 'label' => 'Min. naktų'],
                'host_name' => ['type' => 'string', 'label' => 'Savininkas'],
                'host_phone' => ['type' => 'string', 'label' => 'Telefonas'],
            ],
        ],
        'cars' => [
            'enabled' => true,
            'path' => 'themes/cars',
            'meta_fields' => [
                'year' => ['type' => 'integer', 'label' => 'Metai'],
                'fuel' => ['type' => 'string', 'label' => 'Kuro tipas'],
                'mileage' => ['type' => 'integer', 'label' => 'Rida'],
                'transmission' => ['type' => 'string', 'label' => 'Pavarų dėžė'],
                'body_type' => ['type' => 'string', 'label' => 'Kėbulo tipas'],
                'engine_volume' => ['type' => 'string', 'label' => 'Variklis'],
            ],
        ],
        'companies' => [
            'enabled' => true,
            'path' => 'themes/companies',
            'meta_fields' => [
                'category' => ['type' => 'string', 'label' => 'Kategorija'],
                'rating' => ['type' => 'decimal', 'label' => 'Reitingas'],
                'review_count' => ['type' => 'integer', 'label' => 'Atsiliepimai'],
                'is_verified' => ['type' => 'boolean', 'label' => 'Patvirtinta'],
                'logo' => ['type' => 'string', 'label' => 'Logotipas'],
            ],
        ],
        'jobs' => [
            'enabled' => true,
            'path' => 'themes/jobs',
            'meta_fields' => [
                'company' => ['type' => 'string', 'label' => 'Įmonė'],
                'salary' => ['type' => 'string', 'label' => 'Atlyginimas'],
                'work_mode' => ['type' => 'string', 'label' => 'Darbo būdas'],
                'job_type' => ['type' => 'string', 'label' => 'Etatas'],
                'logo' => ['type' => 'string', 'label' => 'Logotipas'],
            ],
        ],
        'marketplace' => [
            'enabled' => true,
            'path' => 'themes/marketplace',
            'meta_fields' => [
                'condition' => ['type' => 'string', 'label' => 'Būklė'],
                'seller' => ['type' => 'string', 'label' => 'Pardavėjas'],
            ],
        ],
        'realestate' => [
            'enabled' => true,
            'path' => 'themes/realestate',
            'meta_fields' => [
                'area' => ['type' => 'integer', 'label' => 'Plotas'],
                'rooms' => ['type' => 'integer', 'label' => 'Kambariai'],
                'floor' => ['type' => 'integer', 'label' => 'Aukštas'],
                'total_floors' => ['type' => 'integer', 'label' => 'Aukštų sk.'],
                'property_type' => ['type' => 'string', 'label' => 'Tipas'],
                'heating' => ['type' => 'string', 'label' => 'Šildymas'],
            ],
        ],
    ],

];
