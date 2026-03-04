<?php

namespace App\Console\Commands\Seo;

use App\Modules\Seo\RobotsTxtGenerator;
use Illuminate\Console\Command;

class GenerateRobotsTxt extends Command
{
    protected $signature = 'seo:generate-robots-txt';

    protected $description = 'Generate robots.txt with sitemap directive and disallow rules';

    public function handle(RobotsTxtGenerator $generator): int
    {
        $outputPath = public_path('robots.txt');

        file_put_contents($outputPath, $generator->generate());

        $this->info('robots.txt generated at: '.$outputPath);

        return self::SUCCESS;
    }
}
