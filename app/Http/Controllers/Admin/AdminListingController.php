<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ListingStatus;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminListingController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status', 'pending');

        $listings = Listing::query()
            ->with('user')
            ->when($status !== 'all', fn ($query) => $query->where('status', $status))
            ->latest()
            ->paginate(20);

        return view('admin.listings.index', compact('listings', 'status'));
    }

    public function approve(Listing $listing): RedirectResponse
    {
        $listing->update([
            'status' => ListingStatus::Approved,
            'published_at' => now(),
        ]);

        return back()->with('success', 'Skelbimas patvirtintas.');
    }

    public function reject(Listing $listing): RedirectResponse
    {
        $listing->update([
            'status' => ListingStatus::Rejected,
            'published_at' => null,
        ]);

        return back()->with('success', 'Skelbimas atmestas.');
    }
}
