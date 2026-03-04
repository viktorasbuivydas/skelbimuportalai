<?php

namespace App\Modules\Seo;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class MasterIndexGenerator
{
    public function __construct(private SitemapWriter $writer) {}

    public function generate(): int
    {
        $baseUrl = $this->writer->baseUrl();
        $sitemapsRoot = public_path('sitemaps');

        /** @var list<array{loc: string, lastmod: string}> */
        $entries = [];

        foreach (array_keys(config('sitemap.sources', [])) as $dir) {
            $dirPath = "{$sitemapsRoot}/{$dir}";

            if (! File::isDirectory($dirPath)) {
                continue;
            }

            $indexFile = "{$dirPath}/sitemap-index.xml";

            if (File::exists($indexFile)) {
                $entries[] = [
                    'loc' => "{$baseUrl}/sitemaps/{$dir}/sitemap-index.xml",
                    'lastmod' => $this->fileLastmod($indexFile),
                ];
            } elseif (File::exists("{$dirPath}/sitemap.xml")) {
                $entries[] = [
                    'loc' => "{$baseUrl}/sitemaps/{$dir}/sitemap.xml",
                    'lastmod' => $this->fileLastmod("{$dirPath}/sitemap.xml"),
                ];
            } else {
                $sitemapFiles = collect(File::files($dirPath))
                    ->filter(fn ($file) => str_ends_with($file->getFilename(), '.xml'))
                    ->sortBy(fn ($file) => $file->getFilename());

                foreach ($sitemapFiles as $file) {
                    $entries[] = [
                        'loc' => "{$baseUrl}/sitemaps/{$dir}/{$file->getFilename()}",
                        'lastmod' => $this->fileLastmod($file->getPathname()),
                    ];
                }
            }
        }

        $outputPath = public_path('sitemap-index.xml');
        $snapshot = $this->writer->snapshotFile($outputPath);

        $handle = fopen($outputPath, 'w');

        fwrite($handle, $this->writer->sitemapIndexHeader());

        foreach ($entries as $entry) {
            fwrite($handle, $this->writer->sitemapIndexEntry($entry['loc'], $entry['lastmod']));
        }

        fwrite($handle, $this->writer->sitemapIndexFooter());
        fclose($handle);

        $this->writer->preserveFileIfUnchanged($outputPath, $snapshot['hash'], $snapshot['mtime']);

        return count($entries);
    }

    private function fileLastmod(string $filepath): string
    {
        return Carbon::createFromTimestamp(File::lastModified($filepath))->toIso8601String();
    }
}
