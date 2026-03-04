<?php

namespace App\Modules\Seo;

class RobotsTxtGenerator
{
    public function __construct(private SitemapWriter $writer) {}

    public function generate(): string
    {
        $baseUrl = $this->writer->baseUrl();
        $lines = [];

        $lines[] = 'User-agent: *';
        $lines[] = 'Allow: /';
        $lines[] = '';

        foreach ($this->disallowPaths() as $path) {
            $lines[] = "Disallow: {$path}";
        }

        $lines[] = '';
        $lines[] = "Sitemap: {$baseUrl}/sitemap-index.xml";
        $lines[] = '';

        return implode("\n", $lines);
    }

    /**
     * @return list<string>
     */
    private function disallowPaths(): array
    {
        return [
            '/admin/',
            '/dashboard/',
            '/login',
            '/register',
            '/password/',
            '/email/',
            '/api/',
            '/search?*',
            '/*?sort=',
            '/*?filter=',
            '/*?price=',
            '/*?page=',
            '/*?ref=',
        ];
    }
}
