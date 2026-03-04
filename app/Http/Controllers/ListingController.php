<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewResponse;

class ListingController extends Controller
{
    public function show(Listing $listing): ViewResponse
    {
        $listing->load('listingMeta');

        $theme = config('theme.active');
        $module = config("theme.modules.{$theme}");
        $basePath = resource_path("views/{$module['path']}");

        Blade::anonymousComponentPath("{$basePath}/components");
        View::addNamespace('demo', "{$basePath}/pages");

        return view('demo::show', [
            'listing' => $listing,
        ]);
    }
}
