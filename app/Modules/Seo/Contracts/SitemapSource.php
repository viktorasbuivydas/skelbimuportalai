<?php

namespace App\Modules\Seo\Contracts;

interface SitemapSource
{
    /**
     * Yield sitemap URL entries for this source.
     *
     * @return iterable<array{loc: string, changefreq: string, priority: string, lastmod: string}>
     */
    public function urls(string $baseUrl): iterable;

    public function maxUrlsPerFile(): int;
}
