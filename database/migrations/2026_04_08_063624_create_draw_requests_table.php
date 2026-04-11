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
        Schema::create('draw_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('loan_facility_id')->nullable()->constrained('loan_facilities')->nullOnDelete();

            $table->string('draw_number')->nullable();
            $table->string('type')->nullable();
            $table->string('priority')->nullable()->index(); // low/medium/high/urgent

            $table->string('status')->default('draft')->index(); // draft/submitted/in_review/approved/rejected/paid/cancelled

            $table->decimal('amount_requested', 15, 2)->default(0);
            $table->decimal('amount_approved', 15, 2)->nullable();
            $table->decimal('adjustment_amount', 15, 2)->nullable();

            $table->date('draw_date')->nullable()->index();

            $table->timestamp('approved_at')->nullable();
            $table->timestamp('paid_at')->nullable();

            $table->foreignId('requested_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('approved_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->unique(['project_id', 'draw_number']);
            $table->index(['project_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draw_requests');
    }
};
