<?php

namespace App\Modules\Seo;

use Illuminate\Support\Facades\File;

class SitemapWriter
{
    public function baseUrl(): string
    {
        return rtrim(config('sitemap.base_url', config('app.url')), '/');
    }

    public function urlsetHeader(): string
    {
        return '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"'
            .' xmlns:xhtml="http://www.w3.org/1999/xhtml"'
            .' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"'
            .' xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9'
            .' http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\n";
    }

    public function urlsetFooter(): string
    {
        return "</urlset>\n";
    }

    public function urlEntry(string $loc, string $changefreq, string $priority, string $lastmod): string
    {
        $escapedLoc = htmlspecialchars($loc, ENT_XML1, 'UTF-8');

        return "  <url>\n"
            ."    <loc>{$escapedLoc}</loc>\n"
            ."    <changefreq>{$changefreq}</changefreq>\n"
            ."    <priority>{$priority}</priority>\n"
            ."    <lastmod>{$lastmod}</lastmod>\n"
            ."  </url>\n";
    }

    public function sitemapIndexEntry(string $loc, string $lastmod): string
    {
        $escapedLoc = htmlspecialchars($loc, ENT_XML1, 'UTF-8');

        return "  <sitemap>\n    <loc>{$escapedLoc}</loc>\n    <lastmod>{$lastmod}</lastmod>\n  </sitemap>\n";
    }

    public function sitemapIndexHeader(): string
    {
        return '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<?xml-stylesheet type="text/xsl" href="/sitemap-index.xsl"?>'."\n"
            .'<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    }

    public function sitemapIndexFooter(): string
    {
        return "</sitemapindex>\n";
    }

    public function generateStylesheets(): void
    {
        $replacements = [
            '{{SITE_URL}}' => $this->baseUrl(),
            '{{SITE_NAME}}' => config('app.name', 'Laravel'),
            '{{YEAR}}' => date('Y'),
        ];

        $templates = [
            resource_path('seo/sitemap.xsl') => public_path('sitemap.xsl'),
            resource_path('seo/sitemap-index.xsl') => public_path('sitemap-index.xsl'),
        ];

        foreach ($templates as $source => $destination) {
            $content = str_replace(
                array_keys($replacements),
                array_values($replacements),
                file_get_contents($source),
            );

            $snapshot = $this->snapshotFile($destination);

            file_put_contents($destination, $content);

            $this->preserveFileIfUnchanged($destination, $snapshot['hash'], $snapshot['mtime']);
        }
    }

    /**
     * @return array<string, array{hash: string, mtime: int}>
     */
    public function snapshotDirectory(string $directory): array
    {
        $snapshot = [];

        if (! File::isDirectory($directory)) {
            return $snapshot;
        }

        foreach (File::files($directory) as $file) {
            $snapshot[$file->getFilename()] = [
                'hash' => md5_file($file->getPathname()),
                'mtime' => $file->getMTime(),
            ];
        }

        return $snapshot;
    }

    /**
     * @param  array<string, array{hash: string, mtime: int}>  $previousFiles
     */
    public function restoreUnchangedTimestamps(string $directory, array $previousFiles): void
    {
        foreach (File::files($directory) as $file) {
            $filename = $file->getFilename();

            if (isset($previousFiles[$filename]) && md5_file($file->getPathname()) === $previousFiles[$filename]['hash']) {
                touch($file->getPathname(), $previousFiles[$filename]['mtime']);
            }
        }
    }

    public function preserveFileIfUnchanged(string $filepath, ?string $previousHash, ?int $previousMtime): void
    {
        if ($previousHash !== null && $previousMtime !== null && md5_file($filepath) === $previousHash) {
            touch($filepath, $previousMtime);
        }
    }

    /**
     * @return array{hash: string|null, mtime: int|null}
     */
    public function snapshotFile(string $filepath): array
    {
        if (! File::exists($filepath)) {
            return ['hash' => null, 'mtime' => null];
        }

        return [
            'hash' => md5_file($filepath),
            'mtime' => File::lastModified($filepath),
        ];
    }
}
