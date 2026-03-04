<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Database\Seeders\ThemeInstallSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class EnsureThemeInstalled
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Schema::hasTable('settings') || ! Schema::hasTable('listings')) {
            return $next($request);
        }

        $configuredTheme = config('theme.active');
        $currentTheme = Setting::get('current_theme');

        if ($currentTheme !== $configuredTheme) {
            \App\Models\ListingMeta::query()->truncate();
            \App\Models\Listing::query()->truncate();

            Artisan::call('db:seed', [
                '--class' => ThemeInstallSeeder::class,
                '--force' => true,
            ]);

            Setting::set('current_theme', $configuredTheme);
            Setting::set('theme_installed_at', now()->toISOString());
        }

        return $next($request);
    }
}
