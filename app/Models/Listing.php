<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Listing extends Model
{
    /** @var list<string> */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'location',
        'image',
        'is_featured',
        'published_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @return HasMany<ListingMeta, $this>
     */
    public function listingMeta(): HasMany
    {
        return $this->hasMany(ListingMeta::class);
    }

    public function meta(string $key): ?string
    {
        return $this->listingMeta
            ->where('meta_key', $key)
            ->first()
            ?->meta_value;
    }

    /**
     * @return Collection<string, string|null>
     */
    public function allMeta(): Collection
    {
        return $this->listingMeta
            ->pluck('meta_value', 'meta_key');
    }

    /**
     * @param  Builder<Listing>  $query
     * @return Builder<Listing>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at');
    }

    public function getIsNewAttribute(): bool
    {
        return $this->published_at
            && $this->published_at->greaterThan(now()->subDays(7));
    }
}
