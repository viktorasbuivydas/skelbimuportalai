# Skelbimų Portalai

## Sitemap Generation

The project includes a config-driven SEO sitemap system located in `app/Modules/Seo/`. Sitemaps are generated as static XML files into `public/sitemaps/` with automatic file splitting, timestamp preservation, and a master index.

### Quick Start

```bash
# Generate everything (all sitemaps, master index, robots.txt, XSL stylesheets)
php artisan seo:generate-all-sitemaps

# Generate a single source
php artisan seo:generate-sitemap listings

# Generate master index or robots.txt independently
php artisan seo:generate-master-sitemap-index
php artisan seo:generate-robots-txt
```

Sitemaps are automatically regenerated daily at 04:00 via the scheduler (`routes/console.php`).

### Output Structure

```
public/
├── sitemap-index.xml           ← Master index
├── sitemap.xsl                 ← XSL stylesheet (generated from template)
├── sitemap-index.xsl           ← XSL stylesheet for index files
├── robots.txt                  ← Generated, points to sitemap-index.xml
└── sitemaps/
    ├── listings/
    │   ├── sitemap_1.xml       ← Auto-split at 5,000 URLs per file
    │   └── sitemap-index.xml   ← Created only when multiple files exist
    └── pages/
        └── sitemap_1.xml
```

### Adding a New Sitemap Source

1. Create a source class implementing `SitemapSource`:

```php
<?php

namespace App\Modules\Seo\Sources;

use App\Models\Agent;
use App\Modules\Seo\Contracts\SitemapSource;

class AgentSource implements SitemapSource
{
    public function urls(string $baseUrl): iterable
    {
        foreach (Agent::query()->active()->orderBy('id')->lazy(1000) as $agent) {
            yield [
                'loc' => $baseUrl . '/agents/' . rawurlencode($agent->slug),
                'changefreq' => 'weekly',
                'priority' => '0.6',
                'lastmod' => $agent->updated_at->toIso8601String(),
            ];
        }
    }

    public function maxUrlsPerFile(): int
    {
        return 5000;
    }
}
```

2. Register it in `config/sitemap.php`:

```php
'sources' => [
    'listings' => ListingSource::class,
    'pages'    => PageSource::class,
    'agents'   => AgentSource::class, // ← add this line
],
```

That's it. The generator, master index, and all commands pick it up automatically.

### Architecture

```
app/Modules/Seo/
├── Contracts/
│   └── SitemapSource.php          ← Interface: urls() + maxUrlsPerFile()
├── Sources/
│   ├── ListingSource.php          ← Listing detail pages
│   └── PageSource.php             ← Static/theme module pages
├── SitemapGenerator.php           ← Processes any SitemapSource (splitting, streaming, snapshots)
├── SitemapWriter.php              ← XML helpers, file snapshot/restore, XSL generation
├── MasterIndexGenerator.php       ← Builds sitemap-index.xml from config sources
└── RobotsTxtGenerator.php         ← Generates robots.txt

app/Console/Commands/Seo/
├── GenerateAllSitemaps.php        ← Orchestrator: runs all sources + master + robots + XSL
├── GenerateSitemap.php            ← seo:generate-sitemap {key?} — one or all sources
├── GenerateMasterSitemapIndex.php ← seo:generate-master-sitemap-index
└── GenerateRobotsTxt.php          ← seo:generate-robots-txt

config/sitemap.php                 ← Source registry + base URL config
resources/seo/                     ← XSL templates with {{SITE_URL}}, {{SITE_NAME}}, {{YEAR}} placeholders
```

### Key Design Decisions

- **Timestamp preservation** — if generated file content hasn't changed, the original file modification time is restored. This prevents unnecessary `lastmod` changes in the master index.
- **Memory efficiency** — sources use `lazy()` / generators to yield URLs one at a time; XML is streamed via `fopen`/`fwrite`.
- **Auto-splitting** — each source defines `maxUrlsPerFile()`. When exceeded, files are split and a per-source `sitemap-index.xml` is created.
- **No third-party packages** — the entire system is built with plain Laravel/PHP.

### Configuration

Set `SITEMAP_BASE_URL` in `.env` for production (falls back to `APP_URL`):

```env
SITEMAP_BASE_URL=https://www.example.com
```
