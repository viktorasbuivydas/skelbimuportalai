<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    $slug = app()->isLocal() ? request()->query('theme') : null;
    $module = $slug ? config("theme.modules.{$slug}") : null;

    if ($module && $module['enabled']) {
        $basePath = resource_path("views/{$module['path']}");
        Blade::anonymousComponentPath("{$basePath}/components");
        View::addNamespace('demo', "{$basePath}/pages");

        return view('demo::index');
    }

    $active = config('theme.active');
    $activeModule = config("theme.modules.{$active}");
    $basePath = resource_path("views/{$activeModule['path']}");
    Blade::anonymousComponentPath("{$basePath}/components");
    View::addNamespace('demo', "{$basePath}/pages");

    return view('demo::index');
})->name('home');

foreach (config('theme.modules', []) as $slug => $module) {
    if (! $module['enabled']) {
        continue;
    }

    Route::get("/{$slug}", function () use ($slug, $module) {
        $override = app()->isLocal() ? request()->query('theme') : null;

        if ($override && $override !== $slug) {
            $overrideModule = config("theme.modules.{$override}");

            if ($overrideModule && $overrideModule['enabled']) {
                $module = $overrideModule;
            }
        }

        $basePath = resource_path("views/{$module['path']}");
        Blade::anonymousComponentPath("{$basePath}/components");
        View::addNamespace('demo', "{$basePath}/pages");

        return view('demo::index');
    })->name($slug);
}

Route::get('/skelbimai/{listing:slug}', [ListingController::class, 'show'])
    ->name('listing.show');
