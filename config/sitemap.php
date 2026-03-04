<?php

use App\Modules\Seo\Sources\ListingSource;
use App\Modules\Seo\Sources\PageSource;

return [

    /*
    |--------------------------------------------------------------------------
    | Sitemap Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL used in all sitemap entries. Falls back to APP_URL.
    | Set SITEMAP_BASE_URL in .env for production to ensure correct URLs.
    |
    */

    'base_url' => env('SITEMAP_BASE_URL', env('APP_URL', 'http://localhost')),

    /*
    |--------------------------------------------------------------------------
    | Sitemap Sources
    |--------------------------------------------------------------------------
    |
    | Each key becomes a subdirectory under public/sitemaps/ and a reference
    | in the master sitemap-index.xml. The value is a class implementing
    | App\Modules\Seo\Contracts\SitemapSource.
    |
    | To add a new sitemap type, create a source class and register it here:
    |
    |   'agents' => \App\Modules\Seo\Sources\AgentSource::class,
    |
    */

    'sources' => [
        'listings' => ListingSource::class,
        'pages' => PageSource::class,
    ],

];
