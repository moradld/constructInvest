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
        Schema::create('investment_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('investor_id')->constrained()->cascadeOnDelete();

            $table->decimal('amount', 15, 2);
            $table->string('status')->default('cleared')->index(); // pending/cleared/failed
            $table->timestamp('received_at')->nullable()->index();

            $table->string('reference')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['project_id', 'investor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_transactions');
    }
};
