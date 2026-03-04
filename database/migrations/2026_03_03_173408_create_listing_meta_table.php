<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listing_meta', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('listing_id')->constrained('listings')->cascadeOnDelete();
            $table->string('meta_key');
            $table->string('meta_value')->nullable();

            $table->index(['listing_id', 'meta_key']);
            $table->index(['meta_key', 'meta_value']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('listing_meta');
    }
};
