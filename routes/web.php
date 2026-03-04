<?php

use App\Http\Controllers\Admin\AdminListingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserListingController;
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

Route::middleware('auth')->group(function (): void {
    Route::get('/valdymas', DashboardController::class)->name('dashboard');

    Route::prefix('valdymas/skelbimai')->name('dashboard.listings.')->group(function (): void {
        Route::get('/', [UserListingController::class, 'index'])->name('index');
        Route::get('/naujas', [UserListingController::class, 'create'])->name('create');
        Route::post('/', [UserListingController::class, 'store'])->name('store');
        Route::get('/{listing}/redaguoti', [UserListingController::class, 'edit'])->name('edit');
        Route::put('/{listing}', [UserListingController::class, 'update'])->name('update');
        Route::delete('/{listing}', [UserListingController::class, 'destroy'])->name('destroy');
    });

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function (): void {
        Route::get('/skelbimai', [AdminListingController::class, 'index'])->name('listings.index');
        Route::patch('/skelbimai/{listing}/patvirtinti', [AdminListingController::class, 'approve'])->name('listings.approve');
        Route::patch('/skelbimai/{listing}/atmesti', [AdminListingController::class, 'reject'])->name('listings.reject');
    });
});
