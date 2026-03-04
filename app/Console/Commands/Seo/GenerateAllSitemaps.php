<?php

namespace App\Console\Commands\Seo;

use App\Modules\Seo\SitemapWriter;
use Illuminate\Console\Command;

class GenerateAllSitemaps extends Command
{
    protected $signature = 'seo:generate-all-sitemaps';

    protected $description = 'Run all sitemap generators, master index, and robots.txt';

    public function handle(SitemapWriter $writer): int
    {
        $this->info('Generating all sitemaps...');
        $this->newLine();

        $this->call('seo:generate-sitemap');

        $this->newLine();
        $this->call('seo:generate-master-sitemap-index');

        $this->newLine();
        $this->call('seo:generate-robots-txt');

        $this->newLine();
        $writer->generateStylesheets();
        $this->info('XSL stylesheets generated.');

        $this->newLine();
        $this->info('All sitemaps generated successfully.');

        return self::SUCCESS;
    }
}
