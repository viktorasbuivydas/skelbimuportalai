<?php

namespace App\Modules\Seo\Sources;

use App\Modules\Seo\Contracts\SitemapSource;

class PageSource implements SitemapSource
{
    /** @var array<string, array{changefreq: string, priority: string}> */
    private array $moduleDefaults = [
        'rental' => ['changefreq' => 'daily', 'priority' => '0.9'],
        'cars' => ['changefreq' => 'daily', 'priority' => '0.8'],
        'jobs' => ['changefreq' => 'daily', 'priority' => '0.8'],
        'realestate' => ['changefreq' => 'daily', 'priority' => '0.8'],
        'marketplace' => ['changefreq' => 'daily', 'priority' => '0.8'],
        'companies' => ['changefreq' => 'weekly', 'priority' => '0.7'],
    ];

    /**
     * @return iterable<array{loc: string, changefreq: string, priority: string, lastmod: string}>
     */
    public function urls(string $baseUrl): iterable
    {
        $today = now()->startOfDay()->toIso8601String();

        yield [
            'loc' => $baseUrl,
            'changefreq' => 'daily',
            'priority' => '1.0',
            'lastmod' => $today,
        ];

        foreach (config('theme.modules', []) as $slug => $module) {
            if (! $module['enabled']) {
                continue;
            }

            $settings = $this->moduleDefaults[$slug] ?? ['changefreq' => 'weekly', 'priority' => '0.6'];

            yield [
                'loc' => "{$baseUrl}/{$slug}",
                'changefreq' => $settings['changefreq'],
                'priority' => $settings['priority'],
                'lastmod' => $today,
            ];
        }
    }

    public function maxUrlsPerFile(): int
    {
        return 50000;
    }
}
