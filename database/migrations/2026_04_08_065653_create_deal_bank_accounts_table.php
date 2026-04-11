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
        Schema::create('deal_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_id')->constrained('deals')->cascadeOnDelete();

            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_last4')->nullable();
            $table->string('routing_last4')->nullable();

            $table->string('plaid_item_id')->nullable();
            $table->string('status')->default('connected');

            $table->timestamps();

            $table->index('deal_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_bank_accounts');
    }
};
