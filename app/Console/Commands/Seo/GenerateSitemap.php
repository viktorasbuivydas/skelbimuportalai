<?php

namespace App\Console\Commands\Seo;

use App\Modules\Seo\Contracts\SitemapSource;
use App\Modules\Seo\SitemapGenerator;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'seo:generate-sitemap {key? : Source key from config (e.g. listings, pages). Omit to generate all.}';

    protected $description = 'Generate XML sitemap(s) for a registered source or all sources';

    public function handle(SitemapGenerator $generator): int
    {
        $sources = config('sitemap.sources', []);
        $key = $this->argument('key');

        if ($key !== null) {
            if (! isset($sources[$key])) {
                $this->error("Unknown sitemap source: {$key}. Available: ".implode(', ', array_keys($sources)));

                return self::FAILURE;
            }

            $this->generateSource($generator, $key, $sources[$key]);

            return self::SUCCESS;
        }

        foreach ($sources as $sourceKey => $sourceClass) {
            $this->generateSource($generator, $sourceKey, $sourceClass);
        }

        return self::SUCCESS;
    }

    /**
     * @param  class-string<SitemapSource>  $sourceClass
     */
    private function generateSource(SitemapGenerator $generator, string $key, string $sourceClass): void
    {
        /** @var SitemapSource $source */
        $source = app($sourceClass);

        $result = $generator->generate($key, $source);

        $this->info("{$key}: {$result['urls']} URLs across {$result['files']} file(s).");
    }
}
