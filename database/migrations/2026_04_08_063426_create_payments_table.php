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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_id')->nullable()->constrained()->nullOnDelete();

            $table->string('payee_type');
            $table->unsignedBigInteger('payee_id');

            $table->string('payment_type')->index(); // contractor_payout/investor_contribution/investor_distribution/refund/other
            $table->decimal('amount', 15, 2);

            $table->decimal('processing_fee', 15, 2)->default(0);
            $table->decimal('total_charged', 15, 2)->nullable();

            $table->char('currency', 3)->default('USD');

            $table->string('status')->index(); // pending/processing/succeeded/failed

            $table->string('payment_method')->nullable(); // ach/wire/card
            $table->string('external_transaction_id')->nullable()->index();

            $table->timestamp('initiated_at')->nullable();
            $table->timestamp('completed_at')->nullable()->index();

            $table->text('internal_notes')->nullable();

            $table->foreignId('created_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();

            $table->index(['payee_type', 'payee_id']);
            $table->index('organization_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
