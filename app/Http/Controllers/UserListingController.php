<?php

namespace App\Http\Controllers;

use App\Enums\ListingStatus;
use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserListingController extends Controller
{
    public function index(Request $request): View
    {
        $listings = $request->user()
            ->listings()
            ->latest()
            ->paginate(10);

        return view('dashboard.listings.index', compact('listings'));
    }

    public function create(): View
    {
        $metaFields = $this->themeMetaFields();

        return $this->resolveThemeView('create', compact('metaFields'));
    }

    public function store(StoreListingRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $meta = $data['meta'] ?? [];
        unset($data['meta']);

        $data['slug'] = Str::slug($data['title']).'-'.Str::random(6);
        $data['user_id'] = $request->user()->id;
        $data['status'] = ListingStatus::Pending;

        $listing = Listing::query()->create($data);

        $this->syncMeta($listing, $meta);

        return redirect()
            ->route('dashboard.listings.index')
            ->with('success', 'Skelbimas sukurtas ir laukia patvirtinimo.');
    }

    public function edit(Listing $listing): View
    {
        $this->authorize('update', $listing);

        $listing->load('listingMeta');
        $metaFields = $this->themeMetaFields();
        $metaValues = $listing->allMeta()->toArray();

        return $this->resolveThemeView('edit', compact('listing', 'metaFields', 'metaValues'));
    }

    public function update(UpdateListingRequest $request, Listing $listing): RedirectResponse
    {
        $this->authorize('update', $listing);

        $data = $request->validated();
        $meta = $data['meta'] ?? [];
        unset($data['meta']);

        if ($listing->title !== $data['title']) {
            $data['slug'] = Str::slug($data['title']).'-'.Str::random(6);
        }

        $data['status'] = ListingStatus::Pending;

        $listing->update($data);

        $this->syncMeta($listing, $meta);

        return redirect()
            ->route('dashboard.listings.index')
            ->with('success', 'Skelbimas atnaujintas ir laukia patvirtinimo.');
    }

    public function destroy(Listing $listing): RedirectResponse
    {
        $this->authorize('delete', $listing);

        $listing->delete();

        return redirect()
            ->route('dashboard.listings.index')
            ->with('success', 'Skelbimas ištrintas.');
    }

    /**
     * @return array<string, array{type: string, label: string}>
     */
    private function themeMetaFields(): array
    {
        $theme = config('theme.active');

        return config("theme.modules.{$theme}.meta_fields", []);
    }

    /**
     * @param  array<string, string|null>  $meta
     */
    private function syncMeta(Listing $listing, array $meta): void
    {
        $listing->listingMeta()->delete();

        $rows = [];
        foreach ($meta as $key => $value) {
            if ($value !== null && $value !== '') {
                $rows[] = ['meta_key' => $key, 'meta_value' => $value];
            }
        }

        if ($rows !== []) {
            $listing->listingMeta()->createMany($rows);
        }
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function resolveThemeView(string $view, array $data = []): View
    {
        $theme = config('theme.active');
        $module = config("theme.modules.{$theme}");
        $themePath = resource_path("views/{$module['path']}/pages/dashboard/{$view}.blade.php");

        if (file_exists($themePath)) {
            \Illuminate\Support\Facades\View::addNamespace(
                'theme-dashboard',
                resource_path("views/{$module['path']}/pages/dashboard")
            );

            return view("theme-dashboard::{$view}", $data);
        }

        return view("dashboard.listings.{$view}", $data);
    }
}
