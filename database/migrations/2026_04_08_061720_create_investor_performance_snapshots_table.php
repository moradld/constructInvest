<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investor_performance_snapshots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('investor_id')->constrained()->cascadeOnDelete();

            $table->date('snapshot_date');
            $table->decimal('aum_value', 15, 2)->nullable();
            $table->decimal('roi_percent', 6, 3)->nullable();

            $table->timestamps();

            $table->unique(['investor_id', 'snapshot_date']);
            $table->index('snapshot_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investor_performance_snapshots');
    }
};
