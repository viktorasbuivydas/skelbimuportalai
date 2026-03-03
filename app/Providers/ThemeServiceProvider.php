<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $theme = config('theme.active');
        $themePath = resource_path("views/themes/{$theme}");

        Blade::anonymousComponentPath("{$themePath}/components");

        View::addNamespace('theme', "{$themePath}/pages");
    }
}
