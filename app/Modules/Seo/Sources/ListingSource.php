<?php

namespace App\Modules\Seo\Sources;

use App\Models\Listing;
use App\Modules\Seo\Contracts\SitemapSource;

class ListingSource implements SitemapSource
{
    /**
     * @return iterable<array{loc: string, changefreq: string, priority: string, lastmod: string}>
     */
    public function urls(string $baseUrl): iterable
    {
        foreach (Listing::query()->published()->select(['id', 'slug', 'updated_at', 'is_featured'])->orderBy('id')->lazy(1000) as $listing) {
            yield [
                'loc' => $baseUrl.'/skelbimai/'.rawurlencode($listing->slug),
                'changefreq' => 'weekly',
                'priority' => $listing->is_featured ? '0.9' : '0.7',
                'lastmod' => $listing->updated_at->toIso8601String(),
            ];
        }
    }

    public function maxUrlsPerFile(): int
    {
        return 5000;
    }
}
