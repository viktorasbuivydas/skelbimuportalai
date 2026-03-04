<?php

namespace App\Modules\Seo;

use App\Modules\Seo\Contracts\SitemapSource;
use Illuminate\Support\Facades\File;

class SitemapGenerator
{
    public function __construct(private SitemapWriter $writer) {}

    /**
     * @return array{urls: int, files: int}
     */
    public function generate(string $key, SitemapSource $source): array
    {
        $directory = public_path("sitemaps/{$key}");
        File::ensureDirectoryExists($directory);

        $previousFiles = $this->writer->snapshotDirectory($directory);

        File::cleanDirectory($directory);

        $baseUrl = $this->writer->baseUrl();
        $maxPerFile = $source->maxUrlsPerFile();
        $totalUrls = 0;
        $fileIndex = 1;
        $urlsInCurrentFile = 0;
        $handle = null;
        $files = [];
        $latestLastmod = '';

        foreach ($source->urls($baseUrl) as $entry) {
            if ($urlsInCurrentFile === 0) {
                $filename = "sitemap_{$fileIndex}.xml";
                $handle = fopen("{$directory}/{$filename}", 'w');
                fwrite($handle, $this->writer->urlsetHeader());
                $files[] = $filename;
            }

            if ($entry['lastmod'] > $latestLastmod) {
                $latestLastmod = $entry['lastmod'];
            }

            fwrite($handle, $this->writer->urlEntry(
                $entry['loc'],
                $entry['changefreq'],
                $entry['priority'],
                $entry['lastmod'],
            ));

            $urlsInCurrentFile++;
            $totalUrls++;

            if ($urlsInCurrentFile >= $maxPerFile) {
                fwrite($handle, $this->writer->urlsetFooter());
                fclose($handle);
                $handle = null;
                $urlsInCurrentFile = 0;
                $fileIndex++;
            }
        }

        if ($handle !== null) {
            fwrite($handle, $this->writer->urlsetFooter());
            fclose($handle);
        }

        if (count($files) > 1) {
            $this->writeSitemapIndex($directory, $key, $files, $baseUrl, $latestLastmod);
        }

        $this->writer->restoreUnchangedTimestamps($directory, $previousFiles);

        return ['urls' => $totalUrls, 'files' => count($files)];
    }

    /**
     * @param  list<string>  $files
     */
    private function writeSitemapIndex(string $directory, string $key, array $files, string $baseUrl, string $latestLastmod): void
    {
        $lastmod = $latestLastmod ?: now()->toIso8601String();

        $handle = fopen("{$directory}/sitemap-index.xml", 'w');
        fwrite($handle, $this->writer->sitemapIndexHeader());

        foreach ($files as $file) {
            fwrite($handle, $this->writer->sitemapIndexEntry(
                "{$baseUrl}/sitemaps/{$key}/{$file}",
                $lastmod,
            ));
        }

        fwrite($handle, $this->writer->sitemapIndexFooter());
        fclose($handle);
    }
}
