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
    | resources/views/themes/.
    |
    */

    'modules' => [
        'rental' => [
            'enabled' => true,
            'path' => 'themes/rental',
        ],
        'cars' => [
            'enabled' => true,
            'path' => 'themes/cars',
        ],
        'companies' => [
            'enabled' => true,
            'path' => 'themes/companies',
        ],
        'jobs' => [
            'enabled' => true,
            'path' => 'themes/jobs',
        ],
        'marketplace' => [
            'enabled' => true,
            'path' => 'themes/marketplace',
        ],
        'realestate' => [
            'enabled' => true,
            'path' => 'themes/realestate',
        ],
    ],

];
