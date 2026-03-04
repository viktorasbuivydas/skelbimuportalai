<?php

namespace App\Console\Commands\Seo;

use App\Modules\Seo\MasterIndexGenerator;
use Illuminate\Console\Command;

class GenerateMasterSitemapIndex extends Command
{
    protected $signature = 'seo:generate-master-sitemap-index';

    protected $description = 'Generate the master sitemap-index.xml referencing all sub-sitemaps';

    public function handle(MasterIndexGenerator $generator): int
    {
        $count = $generator->generate();

        $this->info("Master sitemap-index.xml generated with {$count} sitemap(s).");

        return self::SUCCESS;
    }
}
