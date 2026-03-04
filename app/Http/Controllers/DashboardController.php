<?php

namespace App\Http\Controllers;

use App\Enums\ListingStatus;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $user = $request->user();

        $stats = [
            'total' => $user->listings()->count(),
            'pending' => $user->listings()->where('status', ListingStatus::Pending)->count(),
            'approved' => $user->listings()->where('status', ListingStatus::Approved)->count(),
            'rejected' => $user->listings()->where('status', ListingStatus::Rejected)->count(),
        ];

        $recentListings = $user->listings()->latest()->limit(5)->get();

        if ($user->isAdmin()) {
            $stats['total_pending'] = Listing::query()->pending()->count();
            $stats['total_listings'] = Listing::query()->count();
        }

        return view('dashboard.index', compact('stats', 'recentListings'));
    }
}
