<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $theme = config('theme.active');
        $themePath = resource_path("views/themes/{$theme}");

        View::addNamespace('theme', "{$themePath}/pages");
    }
}
