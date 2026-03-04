<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingMeta extends Model
{
    public $timestamps = false;

    protected $table = 'listing_meta';

    /** @var list<string> */
    protected $fillable = [
        'listing_id',
        'meta_key',
        'meta_value',
    ];

    /**
     * @return BelongsTo<Listing, $this>
     */
    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
