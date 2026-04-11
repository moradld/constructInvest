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
        Schema::create('draw_request_allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('draw_request_id')->constrained('draw_requests')->cascadeOnDelete();

            $table->foreignId('budget_division_id')->nullable()->constrained('budget_divisions')->nullOnDelete();
            $table->foreignId('budget_item_id')->nullable()->constrained('budget_items')->nullOnDelete();

            $table->decimal('allocated_amount', 15, 2)->default(0);
            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index('draw_request_id');
            $table->index('budget_division_id');
            $table->index('budget_item_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draw_request_allocations');
    }
};
