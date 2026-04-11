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
        Schema::create('budget_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('budget_division_id')->nullable()->constrained('budget_divisions')->nullOnDelete();

            $table->string('detail_name');

            $table->decimal('budget_amount', 15, 2)->default(0);
            $table->decimal('actual_cost', 15, 2)->default(0);

            $table->decimal('budget_cost_per_sf', 15, 2)->nullable();
            $table->decimal('actual_cost_per_sf', 15, 2)->nullable();

            $table->date('draw_date')->nullable();
            $table->date('actual_date')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->unsignedTinyInteger('task_completion_percent')->nullable();

            $table->string('payor_name')->nullable();

            $table->string('payment_status')->nullable()->index(); // paid/pending/over_budget etc (UI badge)
            $table->string('pay_status')->nullable();              // keep because in Figma
            $table->string('change_order_number')->nullable();
            $table->string('state')->nullable();                   // "St"
            $table->string('short_project_note')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index('project_id');
            $table->index('budget_division_id');
            $table->index('draw_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget_items');
    }
};
