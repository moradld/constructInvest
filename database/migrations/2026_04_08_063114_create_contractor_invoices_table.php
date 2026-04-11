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
        Schema::create('contractor_invoices', function (Blueprint $table) {
             $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('contractor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_contract_id')->nullable()->constrained('project_contracts')->nullOnDelete();

            $table->string('invoice_number')->nullable();
            $table->decimal('amount', 15, 2);

            $table->string('status')->default('pending_approval')->index(); // pending_approval/approved/rejected/paid
            $table->date('issued_at')->nullable();
            $table->date('due_at')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['project_id', 'status']);
            $table->index('contractor_id');
            $table->index('project_contract_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractor_invoices');
    }
};
