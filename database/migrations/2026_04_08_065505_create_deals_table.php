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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('created_by_user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();

            $table->string('property_name');
            $table->text('property_address')->nullable();

            $table->decimal('property_price', 15, 2)->nullable();
            $table->decimal('rehab_budget', 15, 2)->nullable();
            $table->decimal('arv', 15, 2)->nullable();

            $table->decimal('profit_margin_percent', 6, 3)->nullable();
            $table->decimal('net_profit', 15, 2)->nullable();
            $table->decimal('estimated_costs', 15, 2)->nullable();

            $table->decimal('rule_70_percent', 6, 3)->nullable();
            $table->decimal('max_purchase', 15, 2)->nullable();
            $table->decimal('offer', 15, 2)->nullable();
            $table->decimal('difference', 15, 2)->nullable();

            $table->string('risk_level')->nullable(); // high_profit/medium_risk/low_loss
            $table->string('deal_grade')->nullable();
            $table->decimal('potential_roi_percent', 6, 3)->nullable();

            $table->boolean('qualified')->nullable();

            $table->string('current_step')->default('project_setup'); // project_setup/bank/agreement/completed
            $table->string('status')->default('draft')->index();

            $table->timestamps();

            $table->index('organization_id');
            $table->index('created_by_user_id');
            $table->index('project_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
